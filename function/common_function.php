<?php
include('./includes/connect.php');

function get_products()
{
    global $con;


if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
        $select_query = "select * from `products` order by rand() LIMIT 0,6";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href=''class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
    }
    }
}
}
//get all products

function get_all_products()
{
    global $con;


if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
        $select_query = "select * from `products` order by rand()";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href=''class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
    }
    }
}
}




///get unique categories
function get_uni_category() {
    global $con;

    if (isset($_GET['category'])) {
      $category_id = $_GET['category'];
      $select_query = "select * from `products` where category_id=$category_id";
      $result_query = mysqli_query($con, $select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo  '<h1 class="text-center text-danger">No Stock for this category</h2>';

}
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href=''class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
      }
    }
}


//get unique brands 
///get unique categories
function get_uni_brands() {
    global $con;

    if (isset($_GET['brand'])) {
      $brand_id = $_GET['brand'];
      $select_query = "select * from `products` where brand_id=$brand_id";
      $result_query = mysqli_query($con, $select_query);
      $num_of_rows=mysqli_num_rows($result_query);
      if($num_of_rows==0){
        echo '<h1 class="text-center text-danger">No Stock for this category</h2>';
      }
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href=''class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
      }
    }
}


// sidebar
function getbranch()
{
    global $con;
    $select_brands = "SELECT * FROM `branch`";
    $result_brands = mysqli_query($con, $select_brands);

    if ($result_brands && mysqli_num_rows($result_brands) > 0) {
        while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo "
<li class='nav-item'>
<a href='index.php?brand=$brand_id' class='nav-link text-light'>
$brand_title
</a>
</li>
";
        }
    } else {
        echo "No brands found.";
    }
}

//category function
function getCategory()
{
    global $con;
    $select_brands = "SELECT * FROM `categories`";
    $result_brands = mysqli_query($con, $select_brands);

    if ($result_brands && mysqli_num_rows($result_brands) > 0) {
        while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "
<li class='nav-item'>
<a href='index.php?category=$category_id' class='nav-link text-light'>
$category_title
</a>
</li>
";
        }
    } else {
        echo "No brands found.";
    }
}

//serach product 
function search_products()
{
    global $con;
    if(isset($_GET['search_data_product'])){
      $search_data_value = $_GET['search_data'];
      $select_query = "SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data_value%'";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo '<h1 class="text-center text-danger">No Stock for this category</h2>';
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_id = $row['product_id'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href=''class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
    }
    }

  }

?>