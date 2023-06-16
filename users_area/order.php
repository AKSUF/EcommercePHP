<?php
include('../includes/connect.php');
include('../function/abcommon.php');

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    echo $user_id;
}

// Getting total items and total of all items
$get_ip_address = getIPAddress();
$total_price = 0;
$cart_query_price = "SELECT * FROM `cart` WHERE ip_adress='$get_ip_address'";
$result_cart_price = mysqli_query($con, $cart_query_price);
$invoice_number = mt_rand();
$status = "pending";
$count_products = mysqli_num_rows($result_cart_price);

while($row_price = mysqli_fetch_array($result_cart_price)){
    $product_id = $row_price['product_id'];
    $cart_query_product = "SELECT * FROM `products` WHERE product_id=$product_id";
    $run_price = mysqli_query($con, $cart_query_product);

    while($row_product_price = mysqli_fetch_array($run_price)){
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price += $product_values;
    }
}
// Getting quantity from cart
$get_cart="select * from `cart`";
$run_cart=mysqli_query($con,$get_cart);
$get_item_quantity=mysqli_fetch_array($run_cart);
$quantity=$get_item_quantity['quality'];
if($quantity==0){
    $quantity=1;
    $subtotal=$total_price;
}else{
    $quantity=$quantity;
    $subtotal=$total_price*$quantity;
}
$insert_orders="insert into `user_orders` (user_id,amount_due,invoice_number,total_products,ordes_date,order_status) values($user_id,$subtotal,$invoice_number,$count_products,Now(),'$status')";
$result_query=mysqli_query($con,$insert_orders);
if($result_query){
    echo "<script>alert('orders are submitted successfully')</script>";
echo "<script>window.open('../profile.php','_self')</script>";
}

?>


