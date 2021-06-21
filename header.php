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
        <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward" style="background-color: #334e68">
            <div class="
            container
            d-flex
            justify-content-center justify-content-lg-between
            align-items-center">
                <a class="navbar-brand" img src="~/img/logo.png" alt="logo" width="150" href="index.php">Logo</a>
                <form class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Search.." />
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="col-lg-3">
                    <!--  <?php
              if ($userId == 1) {
                echo '<li class="list-inline-item"><a href="login.php">Login</a></li>';
              }
              else if($userId == 2){
                
                 echo '<li class="list-inline-item"><a href="index.php">Sign Out</a></li>';


              }else if($userId == 3){
                echo '<li class="list-inline-item"><a href="login.php">User Profile</a></li>
                <li class="list-inline-item"><a href="login.php">Sign Out</a></li>';


              }
              else {
                echo '<li class="list-inline-item"><a href="register.php">Sign up</a></li>
                <li class="list-inline-item"><a href="login.php">Login</a></li>';
              }
         ?>
-->

                    <?php
                // 1== register page
              if ($userId == 1) {
                echo '<li class="list-inline-item"><a href="login.php">Login</a></li>';
              }
              //2 == login page
              else if($userId == 2){
                echo '<li class="list-inline-item"><a href="userprofile.php">User Profile</a></li>';

              }
              else {
                echo '<li class="list-inline-item"><a href="register.php">Sign up</a></li>
                      <li class="list-inline-item"><a href="login.php">Login</a></li>';
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