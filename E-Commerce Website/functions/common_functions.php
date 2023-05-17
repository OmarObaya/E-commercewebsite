<?php
// Connecting Database 
 include('includes/Connect.php');

 // GETTING PARTS
 function getproducts(){

 global $connect;
 if(!isset($_GET['Model_ID'])){
    $select_query="SELECT * FROM spareparts order by rand() LIMIT 0,9 ";
    $res=mysqli_query($connect,$select_query);
           while($row=mysqli_fetch_assoc($res)){
             $Part_ID=$row['Part_ID'];
             $Part_name=$row['Part_name'];
             $Part_description=$row['Part_description'];
             $Car_Model=$row['Car_Model'];
             $Part_Image=$row['Part_Image'];
             echo " <div class='col-md-4'>
              <div class='card' >
              <img src='./Admin_Area/Parts_images/$Part_Image' class='card-img-top' alt='...'>
               <div class='card-body'>
               <h5 class='card-title'>$Part_name</h5>
               <p class='card-text'>$Part_description</p>
              <a href='#' class='btn btn-primary'>View more</a>
       </div> 
     </div>
 </div> " ;


           }


    
 }
 }
// Displaying Car Models in Sidenav bar 
function getcarmodel(){
global $connect;
$select_models="SELECT * FROM carmodels";
$models=mysqli_query($connect,$select_models);
$row_data=mysqli_fetch_assoc($models);
while($row_data=mysqli_fetch_assoc($models)){
  $Car_Model= $row_data['Car_Model'];
  $Model_Id=$row_data['Model_Id'];

  echo  "<li class='nav-item'> <a  href='index.php?Model_ID=$Model_Id' class='nav-link text-black'> $Car_Model </a>  </li>";
}}

// getting unique categories

function get_unique_carmodel(){
  global $connect;
  @$model_id=$_GET['Model_ID'];
  if(isset($_GET['Model_ID'])){
     $select_query="SELECT * FROM spareparts WHERE Car_Model= $model_id ";
     $res=mysqli_query($connect,$select_query);
     $num_of_rows=mysqli_num_rows( $res);
     if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>  No Parts available for this car Model</h2>";
     }
      while($row=mysqli_fetch_assoc($res)){
              $Part_ID=$row['Part_ID'];
              $Part_name=$row['Part_name'];
              $Part_description=$row['Part_description'];
              $Car_Model=$row['Car_Model'];
              $Part_Image=$row['Part_Image'];
              echo " <div class='col-md-4'>
               <div class='card' >
               <img src='./Admin_Area/Parts_images/$Part_Image' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$Part_name</h5>
                <p class='card-text'>$Part_description</p>
               <a href='#' class='btn btn-primary'>View more</a>
        </div> 
      </div>
  </div> " ;


}}

}

// getting all products displayed

function display_all_products(){

global $connect;
  if(!isset($_GET['Model_ID'])){
    $select_query="SELECT * FROM spareparts order by rand()";
    $res=mysqli_query($connect,$select_query);
           while($row=mysqli_fetch_assoc($res)){
             $Part_ID=$row['Part_ID'];
             $Part_name=$row['Part_name'];
             $Part_description=$row['Part_description'];
             $Car_Model=$row['Car_Model'];
             $Part_Image=$row['Part_Image'];
             echo " <div class='col-md-4'>
              <div class='card' >
              <img src='./Admin_Area/Parts_images/$Part_Image' class='card-img-top' alt='...'>
               <div class='card-body'>
               <h5 class='card-title'>$Part_name</h5>
               <p class='card-text'>$Part_description</p>
              <a href='#' class='btn btn-primary'>View more</a>
       </div> 
     </div>
 </div> " ;


           }


    
 }





}



















?>