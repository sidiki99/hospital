<?php
 $project_title = "Web Development";
 $project_text = "msidiki075@gmail.com";
 $project_logo ="images/Container-26-2.svg";
?>
 
<?php 
$nav = [
  ["link" => "index.php", "title" => "Home"],
  ["link" => "book.php", "title" => "Book"],
  ["link" => "login.php", "title" => "Login"],
  ["link" => "javascript.php", "title" => "Js"],
  ["link" => "portfolio.php", "title" => "Portfolio"]
]; 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web page</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" > 
    <link href="./assets/css/font.min.css" rel="stylesheet" >
       <link href="./assets/css/external.css" rel="stylesheet" >    
       <link href="./assets/css/portfolio.css" rel="stylesheet" >
       <link href="./assets/css/book.css" rel="stylesheet" >
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <style>
     

    </style>
  
  </head>
  <body>


   
 <div  class="container-fluid">
  <div class="row bg-custom-blue p-3  d-flex align-items-center ">
     <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">

     <img class="logo" src="<?php echo $project_logo ?>">
    </div>
    <div class="col-lg-6 col-md-6  col-sm-12 col-xsm-12 text-center text-white  ">

     <h1> <?php echo $project_title  ?> </h1>
    </div>
    <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 text-center text-white  ">
        <?php echo $project_text  ?>
      
    </div>
  </div>
  <div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xsm-12 text-center  fs-4  fw-bold py-2 " >
    
     
          
            <?php
          foreach ($nav as $nav_items) {
          echo '<a href="' . $nav_items['link'] . '" class="link-dark p-3 text-decoration-none">' . $nav_items['title'] . '</a>';
          }
            ?>
                 
 </div>
  </div>