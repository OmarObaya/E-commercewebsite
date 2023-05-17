<h2 class="text-center">Add Car </h2>
<form action="" method="post"  class="mb-5">
<div class="input-group w-20 m-5">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-folder-plus"></i></span>
  <input type="text" name= "models"  class="form-control " placeholder="Add Models" aria-label="Modeles" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

<input type="submit"   name="carmodels" style="height:50px; width:250px" class="bg-black text-white mx-5  p-3 border-0" Value="Add Car Models">
  
</div>

<?php

include('../Connect.php');

if(isset($_POST['carmodels'])) {

    $Car_Models = $_POST['models'];

    $select_query="SELECT * FROM carmodels WHERE Car_Model='$Car_Models'" ;

    $result_select=mysqli_query($connect,  $select_query);

    $number=mysqli_num_rows($result_select);

    if($number>0){
      echo "<script> alert('Car Model has been already added in the database') </script>";

    }
    else{

  $insert_query = "INSERT INTO carmodels (Car_Model) VALUES ('$Car_Models')";
  $result = mysqli_query($connect, $insert_query);

  if($result) {
    echo "<script> alert('Car Model has been added sucessfully') </script>";

  }else{
    echo "Error: " . $insert_query  . "<br>" . mysqli_error($connect);
  }
}
}
?>


</form>



