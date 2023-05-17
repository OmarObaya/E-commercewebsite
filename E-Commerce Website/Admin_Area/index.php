<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin DashBoard</title>

    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.admin_image{

width:500px;
/*height:500px ;*/
object-fit:contain;


}




</style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
    </head>
    <!--css file-->
<link rel="stylesheet"  href="../style.css">
    <body>
<!--NavigationBar-->
<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <img src="../images/Opel-Logo-PNG-Picture.png" alt="" class="Logo">
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
      <a href="" class="nav-link text-white"> Welcome Admin</a>
    </div>
  </div>
</nav>

<!--Second Child-->
<div class="bg-light">
    <h3 class="text-center p-2"> Manage Details</h3>
    
</div>
<!--Third Child-->
<div class="row">
    <div class="col-md-14 bg-secondary p-0.5 d-flex align-items-center ">
        <div class="px-5">
            <a href=""><img src="../images/Picture1.jpg" alt=""  class="admin_image"></a>
            <p class="text-light text-center ">Admin Name</p>
        </div >
        <div class="button text-center">
<button style="background-color: black" > <a href="Add_Products.php" class="nav-link text-white   my-1"> Add Producs</a></button>
<button style="background-color: black"> <a href="" class="nav-link text-light  my-1">View Available Products</a></button>
<button style="background-color: black"> <a href="index.php?AddCarModel" class="nav-link text-light my-1">Add Car Models</a></button>
<button style="background-color: black"> <a href="" class="nav-link text-light  my-1">View Car Models</a></button>
<button style="background-color: black"> <a href="" class="nav-link text-light my-1">List Of Users</a></button>
<button style="background-color: black"> <a href="" class="nav-link text-light my-1">Logout</a> </button>


        <div>
            
        </div>
        
    </div>
    
</div>









<!--fourth Child-->
<div class="container my-3">
    <?php
    if(isset($_GET['AddCarModel']))
    
    include('Add_Car_Models.php')
    
    
    ?>
</div>


<!--fifth Child-->
<div class="container my-5">
    <?php
    if(isset($_GET['AddProduct']))
    
    include('Add_Products.php')
    
    
    ?>
</div>





<!--Last Child-->
<div class="bg-black p-3 text-center">
    <p style="color:white">
        All Rights Reserved  Copyright ©-Designed By Omar Obaya-2023
    </p>
    
</div>

</div>


















    
    

    <!--bootstrap js link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>