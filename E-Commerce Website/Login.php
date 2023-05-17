<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registeration Form </title>
        <link href="css/style.css" rel="stylesheet">

        <!--bootstrap js link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 <!--bootstrap css link-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--font awsome link-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
<body class="bg-light ">
  <div class="container mt-3">
  <h1 class="text-center">Registeration</h1>

  <!--form-->
  <form action=""  method= "post">

<!--User's Email-->

<div class="form-outline mb-4 w-50 m-auto">
<label for="part_name" class="form-label">Email</label>
        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Please Enter Your Email " autocomplete="off" required="required">
</div>

<!--User's Password-->

<div class="form-outline mb-4 w-50 m-auto">
<label for="part_name" class="form-label">Password</label>
        <input type="password" name="userPass" id="userPass" class="form-control" placeholder="Please Enter Password" autocomplete="off" required="required">  
</div>

<!--submit button-->

<div class="form-outline mb-4 w-50 m-auto">
       <input type="submit" name="Register" class="btn btn-info mb-3 px-3" value="Register">
      </div>
</form>
  </div>
    </body>
</html>