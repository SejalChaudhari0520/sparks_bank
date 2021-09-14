<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-color :black ;">
  <?php
  include 'navbar.php';
  ?>
      
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <p text-align:right><b><h1 style="color:white">Welcome to
                  SPARKS BANK</b></h1></p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://cdn4.vectorstock.com/i/1000x1000/06/78/bank-icon-vector-1770678.jpg" class="img-fluid pt-2" height="20%" width="20%" align="right" >
              </div>
            </div>
<!-- Caraousel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <center><div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/07/15/848365-rupee-istock-071519.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Easy Money Transfer</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdV-iTZPqZJ1DtPnNzydKC3Gi2dokFQpE5JAJ8heIS4-BXCOzFbW0Z0MPf94FS-GNihNc&usqp=CAU" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3>Quick Personal Loans</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="data:image/png;base64,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" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Customer Satisfaction</h3>
    </div>
    </div>
  </div></center>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--About us-->
<section class= "my-5">
<div class="container-fluid">
 <div class ="row">
      <div  class="col-lg-6 col-md-6 col-12">
      <center><b><h1 style="color:white"><b>ABOUT SPARKS BANK</b></h1></b></center>
      <p1> <h4 style="color:white"> Sparks Bank is a part of sparks foundation. The sparks foundation is working to bring parity in education, making sure children have equal opportunity at success, irrespective of the financial background.The Graduate Rotational Internship Program is a unique offer for students and recent graduates to experience and join The Sparks Foundation. In addition to skills-specific tasks, they encourage interns to build a credible professional profile.
                This website is a part of sparks foundation internship program popularly called as GRIP that is graduate rotational program . Spark foundation had provided many internship to the students through these program. They have providded various opportunities to the students of various domain and had given up the fair chance to all interns to prove their skills and enhance them through this program[GRIP].
</p></h4>
        </div>  
         
 </div>
 </div>

      <br><br>
      <footer class="text-center mt-5 py-2">
        <p style="color : white;">&copy SEPTEMBER 2021. Made by <b>SEJAL CHAUDHARI</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html> 