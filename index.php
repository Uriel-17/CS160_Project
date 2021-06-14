<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

    <title>slidestest</title>
  </head>
  <body>
    <!--header-->
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light py-4 index-forward"
        style="background-color: #334e68"
      >
        <div
          class="
            container
            d-flex
            justify-content-center justify-content-lg-between
            align-items-center
          "
        >
          <a
            class="navbar-brand"
            img
            src="~/img/logo.png"
            alt="..."
            width="150"
            href="#"
            >Logo</a
          >
          <form class="col-lg-7">
            <div class="row">
              <div class="col-lg-9">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search.."
                />
              </div>
              <div class="col-lg-3">
                <button class="btn btn-primary" type="submit">Search</button>
              </div>
            </div>
          </form>
          <ul class="col-lg-3">
            <li class="list-inline-item"><a href="#">Sign up</a></li>
            <li class="list-inline-item"><a href="#">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!--container-->
    <div class="container">
      <style type="text/css">
        h2 {
          padding-top: 200px;
        }
      </style>
      <h2 class="text-center">Categories</h2>
      <!--slides-->
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <!--slide1-->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="java" />
              </div>
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="python" />
              </div>
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="c++" />
              </div>
              <div class="col-3">
                <img
                  src="images/code.jpg"
                  class="d-block w-100"
                  alt="javascript"
                />
              </div>
            </div>
          </div>
          <!--end of slide 1-->

          <!--slide2-->
          <div class="carousel-item">
            <div class="row">
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="java" />
              </div>
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="python" />
              </div>
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="java" />
              </div>
              <div class="col-3">
                <img src="images/code.jpg" class="d-block w-100" alt="java" />
              </div>
            </div>
          </div>
          <!--end of slide 2-->
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--footer-->
    <footer class="footer">
      <div class="inner-footer">
        <div class="social-links">
          <ul>
            <li class="social-items">
              <a href="#">Facebook </a>
            </li>
            <li class="social-items">
              <a href="#">LinkedIn</a>
            </li>
            <li class="social-items">
              <i class="fad fa-camera"></i>

              <a href="#">Instagram</i></a>
            </li>
          </ul>
        </div>
        <div class="quick-links">
          <ul>
            <li class="quick-items"><a href ="#""> Home</a></li>
            <li class="quick-items"><a href ="#""> About</a></li>
            <li class="quick-items"><a href ="#""> Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="outer-footer">
        Copyright &copy; All Rights Reserved.
      </div>
    </footer>

    <!-- JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
