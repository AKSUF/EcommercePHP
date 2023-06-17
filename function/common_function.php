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
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price</p>
      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View more</a>
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
        
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price</p>
      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View more</a>
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
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price</p>
      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View more</a>
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
        $product_price = $row['product_price'];
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
      <p class='card-text'>$product_price</p>
      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View more</a>  <a href='#' class='btn btn-primary'>View more</a>
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
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "
  <div class='col-md-4 my-3'>
  <div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='...''>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price</p>
      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-primary'>View more</a>
    </div>
  </div>
</div>
  ";
    }
    }

  }

//view details function
function view_details() {
  global $con;
  if (isset($_GET['product_id'])) {
      if (!isset($_GET['category'])) {
          if (!isset($_GET['brand'])) {
              $product_id = $_GET['product_id'];
              $select_query = "SELECT * FROM `products` WHERE product_id=$product_id";
              $result_query = mysqli_query($con, $select_query);

              while ($row = mysqli_fetch_assoc($result_query)) {
                  $product_id = $row['product_id'];
                  $product_title = $row['product_title'];
                  $product_description = $row['product_description'];
                  $product_price = $row['product_price'];
                  $product_image1 = $row['product_image1'];
                  $product_image2 = $row['product_image2'];
                  $product_image3 = $row['product_image3'];
                  $product_id = $row['product_id'];
                  $category_id = $row['category_id'];
                  $brand_id = $row['brand_id'];

                  echo "
                  <div class='col-md-12'>
                      <h4 class='text-center text-info mb-5'>
                          Related Products
                      </h4>
                      <div class='col-md-6'>
                          <img src='../admin_area/$product_image2' class='card-img-top' alt='...'>
                      </div>
                      <div class='col-md-6'>
                          <img src='./admin_area/product_image/$product_image3' class='card-img-top' alt='...'>
                      </div>
                  </div>";
              }
          }
      }
  }
}

//view details function
function view_product() {
  global $con;
  if (isset($_GET['product_id'])) {
      if (!isset($_GET['category'])) {
          if (!isset($_GET['brand'])) {
              $product_id = $_GET['product_id'];
              $select_query = "SELECT * FROM `products` WHERE product_id=$product_id";
              $result_query = mysqli_query($con, $select_query);

              while ($row = mysqli_fetch_assoc($result_query)) {
                  $product_id = $row['product_id'];
                  $product_title = $row['product_title'];
                  $product_description = $row['product_description'];
                  $product_image1 = $row['product_image1'];
                  $product_price = $row['product_price'];
                  $product_image2 = $row['product_image2'];
                  $product_image3 = $row['product_image3'];
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
                      <p class='card-text'>$product_price</p>
                      <a href='index.php?add_to_cart=$product_id'class='btn btn-primary'>Add to Cart</a>
                      <a href='index.php' class='btn btn-primary'>Go to home</a>
                    </div>
                  </div>
                </div>
                  ";
              }
          }
      }
  }
}



//get ip adress
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  


function cart_item(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress();  
  $select_query="Select * from `cart` where ip_adress='$get_ip_add'";
  $result_query=mysqli_query($con,$select_query);
$count_cart_item=mysqli_num_rows($result_query);
}else{
  global $con;
  $get_ip_add = getIPAddress();  
  $select_query="Select * from `cart` where ip_adress='$get_ip_add'";
  $result_query=mysqli_query($con,$select_query);
$count_cart_item=mysqli_num_rows($result_query);
}
echo $count_cart_item;
}

//function to get cart item
function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();  
    $get_product_id=$_GET['add_to_cart'];
    $select_query="Select * from `cart` where ip_adress='$get_ip_add' and product_id=$get_product_id";
    $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo"<script>alert('This item is already present in the cart')</script>";
    echo"<script>window.open('index.php',_self)</script>";
  }else{
    $insert_query="insert into `cart` (product_id,ip_adress,quality) values($get_product_id,'$get_ip_add',0) ";
    $result_query=mysqli_query($con,$insert_query);
    echo "<script>window.open('index.php','-self')</script>";
  }
  
  }
}

function total_cart_price() {
  global $con;
  if($con)
  $get_ip_add = getIPAddress();
  $total_price = 0;
  $cart_query = "SELECT * FROM `cart` WHERE ip_adress='$get_ip_add'";
  $result = mysqli_query($con, $cart_query);

  while ($row = mysqli_fetch_array($result)) {
      $product_id = $row['product_id'];
      $select_product = "SELECT * FROM `products` WHERE product_id='$product_id'";
      $result_products = mysqli_query($con, $select_product);
      while ($row_product_price = mysqli_fetch_array($result_products)) {
          $product_price = $row_product_price['product_price'];
          $total_price += $product_price;
      }
  }

  echo $total_price;
}

//get user details
function get_user_data() {
  global $con;
  $username = $_SESSION['username'];
  $get_details = "select * from `user_table` where username='$username'";
  $result_query = mysqli_query($con, $get_details);
  while ($row_query = mysqli_fetch_array($result_query)) {
    $user_id = $row_query['user_id'];
    if (isset($_GET['edit_account'])) {
      if (isset($_GET['my_orders'])) {
        if (isset($_GET['delete_account'])) {
          $get_orders = "select * from `user_orders` where user_id=$user_id and order_status='pending'";
          $result_orders_query = mysqli_query($con, $get_orders);
          $row_count = mysqli_num_rows($result_orders_query);
          if ($row_count > 0) {
            echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> pending orders</h3>
            <p><a href='profile.php?my_orders'>Order Details</a></p>
            
            ";
            
          }else{
            echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> pending orders</h3>
            <p><a href='profile.php?my_orders'>Order Details</a></p>

            ";

          }
        }
      }
    }
  }
}



// function get_user_data() {
//   global $con;
//   $username = $_SESSION['username'];
//   $get_details = "SELECT * FROM `user_table` WHERE username='$username'";
//   $result_query = mysqli_query($con, $get_details);
//   $row_query = mysqli_fetch_assoc($result_query);
//   $user_id = $row_query['user_id'];

//   $get_orders = "SELECT COUNT(*) AS count FROM `user_orders` WHERE user_id=$user_id AND order_status='pending'";
//   $result_orders_query = mysqli_query($con, $get_orders);
//   $row_count = mysqli_fetch_assoc($result_orders_query)['count'];

//   echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> pending orders</h3>";
// }


?>