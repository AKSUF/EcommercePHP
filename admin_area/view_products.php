
<?php
include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products for admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.product{
    width: 20%;
    height: 20%;
object-fit: contain;
}

</style>



</head>
<body>
    <table class="table table-bordered-mt-5">
        <thead class="bg-info">
<tr>
    <th>Product ID</th>
    <th>Product Title</th>
    <th>Product Image</th>
    <th>Product Price</th>
    <th>Total Sold</th>
    <th>Status</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
        </thead>
<tbody class="bg-secondary">
<?php
$get_products = "SELECT * FROM `products`";
$result_query = mysqli_query($con, $get_products);

while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keyword = $row['product_keyword'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $product_status = $row['status'];
?>

<tr>
    <td><?php echo $product_id; ?></td>
    <td><?php echo $product_title; ?></td>
    <td><img src="../admin_area/product_image/<?php echo $product_image1; ?>" class="product"></td>
    <td><?php echo $product_price; ?></td>
    <td><?php 
$get_count="select * from `orders_pending` where product_id=$product_id  ";
$result_count=mysqli_query($con,$get_count);
$rows_count=mysqli_num_rows($result_count);
echo $rows_count;
    ?></td>
    <td><?php echo $product_status; ?></td>
    <td><a href="index.php?edit_product=<?php echo $product_id?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td><i class="fa-solid fa-trash"></i></td>
</tr>

<?php
}
?>



</tbody>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    </table>
</body>
</html>