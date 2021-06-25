<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <!--header-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light index-forward" style="background-color: #334e68">
            <div class="
            container
            d-flex
            justify-content-center justify-content-lg-between
            align-items-center">
                <a class="navbar-brand col-lg-2" href="index.php"><img src="~/img/logo.png" alt="logo" width="150"></a>
                <form class="col-lg-8 d-md-block d-none">
                    <div class="row">
                        <div class="searchBox col-lg-10">
                            <input type="text" class="form-control" placeholder="Search.." />
                        </div>
                        <div class="col-lg-2 text-center">
                            <button class="searchButton btn" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="buttons col-lg-2">

                    <?php
                if(isset($_SESSION['userId'])){
                 echo '<li class="list-inline-item"><a href="index.php">Log Out</a></li><li class="list-inline-item"><a href="userprofile.php">'.$_SESSION['fullname'].'</a></li>';
                }else{                   
                    if(isset($_SESSION['pageId'])){
                        $sign_up_hidden = '';
                        $sign_in_hidden = '';
                        if($_SESSION['pageId'] == 2){
                            $sign_up_hidden='hidden';
                        }else if($_SESSION['pageId'] == 3){
                            $sign_in_hidden='hidden';
                        }
                        echo '<li class="list-inline-item"><a href="register.php" '.$sign_up_hidden.'>Sign up</a></li>
                        <li class="list-inline-item"><a href="login.php" '.$sign_in_hidden.'>Login</a></li>';
                    }
                    else{
                        echo '<li class="list-inline-item"><a href="register.php" >Sign up</a></li>
                        <li class="list-inline-item"><a href="login.php" >Login</a></li>';
                    }
            }
              
            ?>

                </ul>
            </div>
        </nav>
    </header>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>