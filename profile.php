<?php
include('./includes/connect.php');
include('./function/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<style>
  .profile_img {
  width: 100px; /* Adjust the width as needed */
  height: 100px; /* Adjust the height as needed */
  border-radius: 50%; /* Make the image round */
  object-fit: cover; /* Preserve the aspect ratio and cover the container */
  margin-top: 8px; /* Adjust the margin as needed */
  }
.navbar-nav {
  background-color: lightgray; /* Set the background color of the row */
  padding: 10px; /* Add some padding to the row */
  border:0px;
}



.nav-link:hover {
  color: green; /* Set the text color on hover */
}
</style>
<body>
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <img src="./images/error-illustration.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item">
              <a class="nav-link"  href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display_all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/user_registration.php">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"><?php cart_item()?></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php total_cart_price();?></a>
            </li>

          </ul>
          <form class="d-flex" role="search" action="" method="get">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data" value="<?php echo isset($_GET['search_data']) ? $_GET['search_data'] : ''; ?>">
    <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
</form>

        </div>
      </div>
    </nav>
    <!-- second child -->
    <nav class="navbar-expand-lg navbar-dark bg-secondary">

      <ul class="navbar-nav me-auto">
        <li class="nav-item">

<?php
@session_start();
if(!isset($_SESSION['username'])){
  echo "  <a href=''class='anv-link'>
  Welcome guest
</a>";
  }else{
    echo "  <a href=''class='anv-link'>
    Welcome ".$_SESSION['username']."
  </a>";
  }
if(!isset($_SESSION['username'])){
echo "<a href='./users_area/user_login.php' class='anv-link'>
login
</a>";
}else{
  echo "<a href='./users_area/user_loout.php' class='anv-link'>
 logout
</a>";
}
?>
        </li>

      </ul>
    </nav>
    <!-- //calling nav break -->
<?php

cart();
?>
    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">
        Hidden Store
      </h3>
      <p class="text-center">
        Congratulation in this online community and store
      </p>
    </div>
    <!-- 4th child -->

    <div class="row">

<div class="col-md-2">
<div class="row">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">


<li class="nav-item ">
<?php 
    $username=$_SESSION['username'];
$user_image="select * from `user_table` where username='$username'";
$result_image=mysqli_query($con,$user_image);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['user_image'];
if($user_image){
    echo "
    <li class='nav-item'>
    <img src='./users_area/users_image/$user_image' class='profile_img my-4' alt=''>
    </li>
    ";
}else{
    echo "There are o image";
}
          ?>
</li>
<li class="nav-item">
  <a class="nav-link" href="./profile.php">Pending Orders</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./profile.php?edit_account=1">Edit Account</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="./profile.php?My_orders">My orders</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="./profile.php?delete_account">Delete Account</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout.php">Logout</a>
</li>

</ul>

<div class="">

</div>


  </div>


</div>


      <div class="col-md-8 text-center text-danger">
        <!-- product section -->
        <?php
   get_user_data();
   if(isset($_GET['edit_account'])){
    include('./users_area/editaccount.php');
   }
    ?>
   
      </div>

    <!-- include footer -->
<?php
include("./includes/footer.php")
?>
  </div>
  <!-- CDN for jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CDN for Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>