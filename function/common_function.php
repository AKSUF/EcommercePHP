<?php
include('./includes/connect.php');

function get_products()
{
    global $con;
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
<a href='index.php?brand=$category_id' class='nav-link text-light'>
$category_title
</a>
</li>
";
        }
    } else {
        echo "No brands found.";
    }
}
