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
function getCourses($categoryID) {

  $cards = true; 

  $courses = getAllCourses(); 

  foreach($courses as $course) {
    
    if($categoryID == $course['categoryId']) {

      printCard($course); 
      
    } else { 

      noCard(); 
      $cards = false; 
    }

  }

  return $cards; 

}

/**
 * Prints a single card to the UI. Checks to see an image exists. If there is no image
 * then the img tag is removed. 
 */
function printCard($course) {
  
  if($course['image'] != '') {

    echo '<div class="card p-3">
          <div class="d-flex flex-row mb-3"><img src="' . $course['image']. '" width="70">
              
              <div class="d-flex flex-column ml-2"><span>Author: '. $course['author'] . '</span><span
                      class="text-black-50">Course Name: ' . $course['courseTitle'] . '</span><span class="ratings"><i class="fa fa-star"></i><i
                          class="fa fa-star"></i><i class="fa fa-star"></i><i
                          class="fa fa-star"></i></span>
              </div>
          </div>
          <h6>' . $course['description'] . '</h6>
          <div class="d-flex justify-content-between install mt-3"><span class="text-primary"><a
                      href="">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
         </div>';

  } else {

    //NEEDS CENTERING 
    echo '<div class="card p-3">
          <div class="d-flex flex-row mb-3">
              
              <div class="d-flex flex-column ml-2"><span>Author: '. $course['author'] . '</span><span
                      class="text-black-50">Course Name: ' . $course['courseTitle'] . '</span><span class="ratings"><i class="fa fa-star"></i><i
                          class="fa fa-star"></i><i class="fa fa-star"></i><i
                          class="fa fa-star"></i></span>
              </div>
          </div>
          <h6>' . $course['description'] . '</h6>
          <div class="d-flex justify-content-between install mt-3"><span class="text-primary"><a
                      href="">View&nbsp;<i class="fa fa-angle-right"></i></a></span></div>
         </div>';
  }
}

/**
 * Prints out a div displaying the message 'No Courses Available' 
 */
function noCard() {

  echo '<div class="">
  <div class="d-flex flex-row mb-3">
      <div class="d-flex flex-column ml-2">
          <h2>No Courses Available 🥴😮‍💨</h2> 
      </div>
  </div>
 </div>';

}

/**
 * Prints out the pagination if there are courses in the database
 */
function printPagination($noCard) {

  if($noCard == true) {

    echo '<nav aria-label="Page navigation">
    <ul class="pagination m-2 justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>'; 
  } 

}

/**
 * Prints the left menu, displaying all of the categories in the database. 
 */
function getCategories($categoryID) {

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