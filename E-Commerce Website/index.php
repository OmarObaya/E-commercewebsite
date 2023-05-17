
<!--connect file>
<?php

include('Connect.php');
include('functions/common_functions.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-commerce website</title>
        <!--bootstrap link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
        <!--font awsome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--css file-->
<link rel="stylesheet"  href="style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>


    
<!--NavigationBar-->

<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <img src="./images/Opel-Logo-PNG-Picture.png" alt="" class="Logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#"><i class="fa-sharp fa-solid fa-house"></i> &nbsp<text>Home</text></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Spare Parts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-phone"> &nbsp</i><text>ContactUs</text></a>
        </li>

         <li class="nav-item">
          <a class="nav-link text-white" href="#">SignUp</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link"  href="#"> Welcome Guest</a>
</li>
<li class="nav-item">
<a class="nav-link"  href="#"> Login</a>
</li>
    </ul> 
</nav>

<!--third child-->

<div class="bg-light">
    <h3 class="text-center">Ali Obaya For Opel Spare Parts</h3>
    <p class="text-center">"Quality Always Matters"</p>
</div>

<!--Fourth Child-->

<div class="row">
    <div class="col-md-10">
        <!--Products-->
        <div class="row">
          <!--Fetching Parts-->
          <?php
       getproducts();
       get_unique_carmodel()
          ?>
<!--row end -->
</div>
<!--column end -->
</div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto  text-center">
            <li class="nav-item">
<a  href="#" class="nav-link bg-black text-white" > <h4>Car Models</h4></a>
            </li>
            <?php
          getcarmodel()

            ?>
        </ul>   
    </div>
</div>

<!--Last Child-->
<?php
include('includes/footer.php');
?>
     </div>





    
    <!--bootstrap js link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>