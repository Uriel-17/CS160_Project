<?php
session_start();
require_once '../server/credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 

$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

insertData($connection, $userTable, $addressTable); 
header("Location: ../home/index.php");

/**
 * InsertData is going to be getting the values from the user and inserting them 
 * to the user table and the address table. If there is an error with the query, the program will 
 * terminate printing an error message. 
 */
function insertData($connection, $userTable, $addressTable) {

    $username = htmlentities($_POST['username']); 

    $fullName = htmlentities($_POST['fullname']); 

    if(htmlentities($_POST['password']) === htmlentities($_POST['confirmpassword'])) {

        $password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
    }

    $streetAddress = htmlentities($_POST['streetaddress']); 

    $birthday = htmlentities($_POST['birthday']); 

    $image = htmlentities($_FILES['image']['name']); 

    $city = htmlentities($_POST['city']);

    $state = htmlentities($_POST['zipcode']); 

    $country = htmlentities($_POST['country']); 

    $phone = htmlentities($_POST['phone']); 

    $email = htmlentities($_POST['email']); 
    
    $time = date('Y-m-d H:i:s'); 

    $zip = htmlentities($_POST['zipcode']); 

    //TODO need to implement move_uploaded_file! 
    if (!empty($_FILES)) {
        if ($_FILES['image']['name'] != "")
        {
        $uploaddir = '../images/user_img/';
        $uploadfile = $uploaddir . $image;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        } else {
            $_SESSION['message'] = 'failed';
            $image = "default.jpg";
        }
    }
}

    $query = "INSERT INTO $userTable (username, password, profileImage, fullname, dateofbirth, email, phonenumber, createtime, updatetime) VALUES ('$username', '$password', '$image', '$fullName', '$birthday', '$email', '$phone', '$time', '$time')"; 

    $result = $connection->query($query); 

    if(!$result) {
        $_SESSION['message'] = 'signup_failed';
        header("Location: ../signup_login/register.php");
    }


    $id = getUserID($connection, $userTable, $username); 

    $_SESSION['userId'] = $id;
    $_SESSION['fullname'] = $fullName;
    $_SESSION['image'] = $image;

    if(htmlentities($_POST['secondaddress']) !== '') {

        $secondAddress = htmlentities($_POST['secondaddress']); 

        $queryAddress = "INSERT INTO $addressTable (streetAddress, secondAddress, city, state, zipcode, country, userId) VALUES ('$streetAddress', '$secondAddress', '$city', '$state', '$zip', '$country', '$id')"; 

    } else {

        $queryAddress = "INSERT INTO $addressTable (streetAddress, city, state, zipcode, country, userId) VALUES ('$streetAddress','$city', '$state', '$zip', '$country', '$id')"; 
    }

    $result2 = $connection->query($queryAddress);

    echo $connection->error; //Display information about why wasnt executed (eg. Error: couldnt find table)

    if(!$result2) {

        $result2->close(); // close 
        error("Something went wrong"); 

    } 
}


/**
 * Looks inside the database and returns the unique ID of the user
 */
function getUserID($connection, $userTable, $username) {

    $queryID = "SELECT * FROM $userTable WHERE username LIKE '$username'";

    $resultID = $connection->query($queryID);

    if(!$resultID) {

        $resultID->close();

        error("Something went wrong!"); 

    } else if($resultID->num_rows) {

        $row = $resultID->fetch_assoc(); 

        $resultID->close(); //close
    
        return $row["userId"]; 
    }

    error("something went terribly wrong"); 
}


/**
 * Establishing the connection to the database. If there is no connection the program will
 * terminate. 
 */
function connect_database($servername, $username, $password, $database) {
   
    $connection = new mysqli($servername, $username, $password, $database);

    if($connection->connect_error) {

        error("Something went wrong..."); 
    } 

    return $connection; 
}


//This is to be called when there is an error. The program will print
//a message and terminate;
function error($str) {
    die($str); // error message then terminates the program
}
?>