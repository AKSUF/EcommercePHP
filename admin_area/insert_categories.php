<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];
  $select_query="Select * from `categories` where category_title='$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo"<script>alert('This category already present')</script>";
  }else{
    $inser_query="insert into `categories` (category_title) values('$category_title') ";
    $result=mysqli_query($con,$inser_query);
    if($result){
      echo "<script>alert('Category has been inserted succesfuly')</>";
    }
  }
 
}


?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">

    <div class="input-group mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
<div class="input-group w-10 mb-2">
  
    <div class="input-group mb-3">
 
  <input type="submit" value="Insert Categries" class="form-control bg-info" name="insert_cat" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1" >
  <!-- <button class="bg-info my-3 px-3 border-0">Insert Categories</button> -->
</div>

</div>


</form>