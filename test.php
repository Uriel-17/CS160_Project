<?php
  
    $title = 'course-content page'; 
    $currentPage = 'Course Page';
    include('header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<section class="course-body">

    <div class="popup" id="save">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h1>title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, quia
                magni! Repellat, dolore hic. Perferendis quam deleniti sunt inventore
                autem mollitia voluptates iusto cum sed, non eius corrupti labore
                facere.</p>
        </div>
    </div>
    <button onclick="togglePopup()">save</button>



</section>
<script src="my_js/course.js"></script>


<?php
    include('footer.php');
?>