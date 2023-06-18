<?php
include('../includes/connect.php');
?>

<?php
if (isset($_GET['delete_product'])) {
    $delete_id = $_GET['delete_product'];
    echo $delete_id;
    $delete_product = "DELETE FROM `products` WHERE product_id=$delete_id";
    $result_product = mysqli_query($con, $delete_product);
    echo "<script>window.open('../admin_area/index.php','_self')</script>";
}
?>
