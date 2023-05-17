<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Spare Parts-Admin Dashboard</title>

<!--bootstrap js link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 <!--bootstrap css link-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--font awsome link-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.form{
display: block !important;
}
</style>
</head>


<body class="bg-light ">
  <div class="container mt-3">
  <h1 class="text-center">Insert Spare Parts</h1>
  <!--form-->
    <form action="" method="post" enctype="multipart/form-data" >
       <!--Part Name-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="part_name" class="form-label">Part Name</label>
        <input type="text" name="part_name" id="part_name" class="form-control" placeholder="Enter Part Name" autocomplete="off" required="required">
      </div>
  <!--Part Description-->

  <div class="form-outline mb-4 w-50 m-auto">
        <label for="part_description" class="form-label">Part Description</label>
        <input type="text" name="part_description" id="part_description" class="form-control" placeholder="Enter Part Description" autocomplete="off" required="required">
      </div>

       <!--Part Number--> 

       <div class="form-outline mb-4 w-50 m-auto">
        <label for="Part_Number" class="form-label">Part Number</label>
        <input type="text" name="Part_Number" id="Part_Number" class="form-control" placeholder="Enter Part Number" autocomplete="off" required="required">
      </div>

      <!--Car Models--> 

      <div class="form-outline mb-4 w-50 m-auto">
        <select name="car_models" id="car_models" class="form-select" required="required">

<option value="">Select Car Model</option>

<?php
include('../Connect.php');
$select_query="SELECT *FROM carmodels";
$res=mysqli_query($connect,$select_query);
while($row=mysqli_fetch_assoc($res)){
  $Car_Model=$row['Car_Model'];
  $Model_Id=$row['Model_Id'];
 echo "<option value='$Model_Id'>$Car_Model</option>";
}

?>
        </select>
      </div>

 <!--Part Image--> 
 <div class="form-outline mb-4 w-50 m-auto">
        <label for="Part_Number" class="form-label"> Part Image</label>
        <input type="file" name="part_Image" id="part_Image" class="form-control" required="required">
      </div>

       <!--submit button-->
       <div class="form-outline mb-4 w-50 m-auto">
       <input type="submit" name="add_part" class="btn btn-info mb-3 px-3" value="Insert Spare Part">
      </div>


      <?php
include('../Connect.php');
if(isset($_POST['add_part'])){
  $Part_name=$_POST['part_name'];
  $Part_description=$_POST['part_description'];
  $Part_number=$_POST['Part_Number'];
  $car_model=$_POST['car_models'];

  // accessing images 
$Part_Image=$_FILES['part_Image']['name'];
  //accessing images temp name
$temp_Part_Image=$_FILES['part_Image']['tmp_name'];

$insert_query = "INSERT INTO spareparts (Part_name,Part_description,Part_number,Car_Model,Part_Image,Date)
 VALUES ('$Part_name','$Part_description',' $Part_number',' $car_model','$Part_Image',Now())";
$result=mysqli_query($connect,$insert_query);  
//adding files in the folder
move_uploaded_file($temp_Part_Image,"./Parts_images/$Part_Image");

if($result) {
  echo "<script> alert('Spare Part has been added sucessfully') </script>";
 }else{
  echo "Error: " . $insert_query  . "<br>" . mysqli_error($connect);
 }

}

?>

    </form>
  </div>
  
</body>

</html>