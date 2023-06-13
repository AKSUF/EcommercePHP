<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
  $brand_title = $_POST['brand_title'];
  $select_query = "SELECT * FROM `branch` WHERE brand_title = '$brand_title'";
  $result_select = mysqli_query($con, $select_query);
  $number = mysqli_num_rows($result_select);
  if($number > 0){
    echo "<script>alert('This brands already exists')</script>";
  } else {
    $insert_query = "INSERT INTO `branch` (brand_title) VALUES ('$brand_title')";
    $result = mysqli_query($con, $insert_query);
    if($result){
      echo "<script>alert('Brands has been inserted successfully')</script>";
    }
  }
}
?>

<h2 class="text-center my-3">Insert Brands</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <div class="input-group mb-3">
      <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
      <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
    </div>
  </div>
  <div class="input-group w-10 mb-2">
    <div class="input-group mb-3">
      <input type="submit" value="Insert Brands" class="form-control bg-info" name="insert_brand" placeholder="Insert brands" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </div>
</form>
