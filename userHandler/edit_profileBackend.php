  
<?php
session_start();
$_SESSION['message'] = 'error';
$token = $_SESSION['userId']; 
require_once '../server/credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 

$fullName = htmlentities($_POST['fullName']); 

$email = htmlentities($_POST['email']); 

$phoneNumber = htmlentities($_POST['phoneNumber']); 

$DOB = htmlentities($_POST['DOB']);

$address = htmlentities($_POST['address']);

$secondaryAddress = htmlentities($_POST['secondaryAddress']);

$city = htmlentities($_POST['city']);

$state = htmlentities($_POST['state']);

$zip = htmlentities($_POST['zipCode']); 

$country = htmlentities($_POST['country']);

$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

updateName($connection, $userTable, $fullName, $token); 

updateEmail($connection, $userTable, $email, $token);

updatePhone($connection, $userTable, $phoneNumber, $token);

updateDOB($connection, $userTable, $DOB, $token);

updateAddress($connection, $addressTable, $address, $token);

updateSecondaryAddress($connection, $addressTable, $secondaryAddress, $token);

updateCity($connection, $addressTable, $city, $token);

updateState($connection, $addressTable, $state, $token); 

updateZip($connection, $addressTable, $zip, $token); 

updateCountry($connection, $addressTable, $country, $token); 

header('Location: ../user_profile/edit_profile.php'); 


function updateCountry($connection, $addressTable, $country, $token) {

  if($country != '') {

    echo $country;

    $query = "UPDATE $addressTable SET country='$country' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}


function updateState($connection, $addressTable, $state, $token) {

  if($state != '') {

    $query = "UPDATE $addressTable SET state='$state' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}
function updateZip($connection, $addressTable, $zip, $token) {

  if($zip != '') {

    $query = "UPDATE $addressTable SET zipcode='$zip' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updateCity($connection, $addressTable, $city, $token) {

  if($city != '') {

    $query = "UPDATE $addressTable SET city='$city' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  }
}

function updateName($connection, $userTable, $fullName, $token) {

  if($fullName != '') {

    $_SESSION['fullname'] = $fullName; 

    $query = "UPDATE $userTable SET fullname='$fullName' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updateSecondaryAddress($connection, $addressTable, $secondaryAddress, $token) {

  if($secondaryAddress != '') {

    $query = "UPDATE $addressTable SET secondAddress='$secondaryAddress' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updateAddress($connection, $addressTable, $address, $token) {

  if($address != '') {

    $query = "UPDATE $addressTable SET streetAddress='$address' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updateDOB($connection, $userTable, $DOB, $token) {

  if($DOB != '') {

    $query = "UPDATE $userTable SET dateofbirth='$DOB' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updatePhone($connection, $userTable, $phoneNumber, $token) {

  if($phoneNumber != '') {

    $query = "UPDATE $userTable SET phonenumber='$phoneNumber' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 
    }
  } 
}

function updateEmail($connection, $userTable, $email, $token) {

  if($email != '') {

    $query = "UPDATE $userTable SET email='$email' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      //Success 
      $_SESSION['message'] = 'success';

      // header('Location: user_account.php'); 

    }
  } 
}

/**
 * Establishing the connection to the database. If there is no connection the program will
 * terminate. 
 */
function connect_database($servername, $username, $password, $database) {

  $connection = new mysqli($servername, $username, $password, $database);

  if ($connection->connect_error) {

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