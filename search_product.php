<?php
include('./includes/connect.php');
include('./function/common_function.php');
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"><sup>1</sup></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price</a>
            </li>

          </ul>
          <form class="d-flex" role="search" action="search_product.php" method="get">
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

          <a href="" class="anv-link">
            Welcome guest

          </a>

          <a href="./users_area/user_login.php" class="anv-link">
            login
          </a>
        </li>

      </ul>
    </nav>
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
      <div class="col-md-10">
        <!-- product section -->
<div class="row">
  <!-- category -->
<?php


search_products();
get_uni_category();
get_uni_brands();

?>
      </div>
      </div>

<!-- 
category section -->
      <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Delivery branch</h4>
            </a>
          </li>
<!-- sitbar -->
          <?php
         getbranch();
        
          ?>
        </ul>
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>

          <!-- //get category -->
          <?php
        getCategory();
          ?>
        </ul>
        <!-- sidenav -->
      </div>
    </div>

    <!-- last child -->

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