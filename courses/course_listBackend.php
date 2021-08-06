<?php
if (session_name() == "") {
  session_start();
}

require_once('../repo/categoryRepo.php');
require_once('../repo/courseRepo.php');
$connection = connect_database($servername, $username, $password, $database); // establishing connection to database


/**
 * Calls a helper function and returns an array of objects. Iterates through the courses array 
 */
function getCourses($categoryID, $key) {

  $courses = [];

  if ($key != "") {
    $courses = searchCourses($key);
  } else if ($categoryID == "") {
    $courses = getAllCourses(); 
  }
  else {
    $courses = getCoursesByCategoryId($categoryID);
  }

  if ($courses != null && count($courses) > 0) {
    foreach($courses as $course) {
      printCard($course); 
    }
  }
  else {
     echo '<div class="">
            <div class="d-flex flex-row mb-3">
                <div class="d-flex flex-column ml-2">
                    <h2 style="color: white;">No Courses Available 🥴😮‍</h2> 
                </div>
            </div>
           </div>';
  }

  

}

/**
 * Prints a single card to the UI. Checks to see an image exists. If there is no image
 * then the img tag is removed. 
 */
function printCard($course) {
  $avg_rating = computeAverageRating($course["courseId"]);
  $star1 = 'style="color: white"';
  $star2 = 'style="color: white"';
  $star3 = 'style="color: white"';
  $star4 = 'style="color: white"';
  $star5 = 'style="color: white"';
  if ($avg_rating >= 1) {
    $star1 = 'style="color: yellow"';
  }
  if ($avg_rating >= 2) {
    $star2 = 'style="color: yellow"';
  }
  if ($avg_rating >= 3) {
    $star3 = 'style="color: yellow"';
  }
  if ($avg_rating >= 4) {
    $star4 = 'style="color: yellow"';
  }
  if ($avg_rating == 5) {
    $star5 = 'style="color: yellow"';
  }

  
  if($course['image'] != '') {

    echo ' <div class="col-md-4 mb-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3 text-center">
                              <img src="../images/course_img/'.$course['image'].'" width="70" height="70">
                                <div class="d-flex flex-column ml-5 col-sm-8 text-center">
                                  <span>Author: '. $course['author'] . '</span>
                                  <span class="text-black-50">' . $course['courseTitle'] . '</span>
                                  <span class="ratings">
                                    <i class="fa fa-star" '.$star1.'></i>
                                    <i class="fa fa-star" '.$star2.'></i>
                                    <i class="fa fa-star" '.$star3.'></i>
                                    <i class="fa fa-star" '.$star4.'></i>
                                    <i class="fa fa-star" '.$star5.'></i>
                                  </span>
                                </div>
                            </div>
                            <h6 class="d-inline-block">'.$course['description'].'</h6>
                            <div class="d-flex justify-content-between install mt-3"><span class="text-primary"><a
                                        href="course.php?id='.$course['courseId'].'">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
                        </div>
                    </div>';

  } else {

    echo ' <div class="col-md-4 mb-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3 text-center"><img src="../images/course_img/default.jpg" width="70">
                                <div class="d-flex flex-column ml-5 col-sm-8 text-center">
                                  <span>Author: '. $course['author'] . '</span>
                                  <span class="text-black-50">' . $course['courseTitle'] . '</span>
                                  <span class="ratings">
                                    <i class="fa fa-star" '.$star1.'></i>
                                    <i class="fa fa-star" '.$star2.'></i>
                                    <i class="fa fa-star" '.$star3.'></i>
                                    <i class="fa fa-star" '.$star4.'></i>
                                    <i class="fa fa-star" '.$star5.'></i>
                                  </span>
                                </div>
                            </div>
                            <h6 class="d-inline-block">'.$course['description'].'</h6>
                            <div class="d-flex justify-content-between install mt-3"><span class="text-primary"><a
                                        href="course.php?id='.$course['courseId'].'">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
                        </div>
                    </div>';
  }
}

/**
 * Prints the left menu, displaying all of the categories in the database. 
 */
function getCategories($categoryID = "") {

  $categories = getAllCategories(); 

  foreach($categories as $course) {

    if($categoryID == $course['categoryId']) {
      
      echo '<li class="active">
              <a href="?categoryId='.$course["categoryId"].'"> 
                <i>' . $course['categoryname'] . '</i>
              </a>
            </li>';

      //NOTE: The class for the i tag: fa fa-java does not work currently. 

    } else {

      echo '<li class="">
              <a href="?categoryId='.$course["categoryId"].'"> 
                <i>' . $course['categoryname'] . '</i>
              </a>
            </li>';


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
function error($str)
{
  die($str); // error message then terminates the program
}