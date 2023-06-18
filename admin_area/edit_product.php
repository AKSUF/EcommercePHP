<?php
include('../includes/connect.php');
?>
<?php
if(isset($_GET['edit_product'])) {
    $edit_id = $_GET['edit_product'];
    $get_data = "select * from `products` where product_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $category_id =$row['category_id'];
    echo $category_id;
    echo $category_id;

$product_description=$row['product_description'];
$product_keyword=$row['product_keyword'];

$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
$product_price =$row['product_price'];
//fetching category name
$select_category="select * from `categories` where category_id=$category_id ";
$result_cat=mysqli_query($con,$select_category);
$row_cat=mysqli_fetch_assoc($result_cat);
$category_title=$row_cat['category_title'];
// fetching brands name
$select_brands="select * from `branch` where brand_id=$brand_id ";
$result_brand=mysqli_query($con,$select_brands);
$row_brand=mysqli_fetch_assoc($result_brand);
$brand_title=$row_brand['brand_title'];
// echo $brand_title;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.productimage{
    width: 20%;
    height: 20%;
}
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto">
            <label for="product_title" class="form-label">
                Product Title
            </label>
            <input type="text" value="<?php echo $product_title?>" id="product_title" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_description" class="form-label">
                Product Description
            </label>
            <input type="text" value="<?php echo $product_description?>" id="product_description" name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_keyword" class="form-label">
                Product Description
            </label>
            <input type="text" id="product_keyword" value="<?php echo $product_keyword?>" name="product_keyword" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_categories" class="form-label">
                Product Categories
            </label>
         <select name="product_category" class="form-control">
         <option value="<?php echo $category_title?>"><?php echo $category_title?></option>
<?php
$select_category_all="select * from `categories`";
$result_cat=mysqli_query($con,$select_category_all);
while($row_cat_all=mysqli_fetch_assoc($result_cat)){
    $category_title=$row_cat_all['category_title'];
    echo "<option value=<option value='$category_id'>$category_title</option>";
}
?>
         </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_brand" class="form-label">
                Product Brand
            </label>
         <select name="product_brands" class="form-control">
         <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>

<?php
$select_category_all="select * from `branch`";
$result_cat=mysqli_query($con,$select_category_all);
while($row_cat_all=mysqli_fetch_assoc($result_cat)){
    $category_title=$row_cat_all['brand_title'];
    echo "<option value=<option value='$brand_id'>$brand_title</option>";
}


?>
      </select>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_image1" class="form-label">
                Product Image1
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image1" class="form-control" required="required">
            <img src="../admin_area/product_image/<?php echo $product_image1?>" alt="" class="productimage">
            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_image2" class="form-label">
                Product Image2
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image2" class="form-control" required="required">
            <img src="../admin_area/product_image/<?php echo $product_image2?>" alt="" class="productimage">

            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_image3" class="form-label">
                Product Image3
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image3" class="form-control" required="required">
            <img src="../admin_area/product_image/<?php echo $product_image3?> alt="" class="productimage">

            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_price" class="form-label">
                Product Price
            </label>
            <input type="text" value="<?php echo $product_price?>" id="product_price " name="product_price" class="form-control" required="required">
        </div>
       <div class="text-center mt-3">
        <input type="submit" name="edit_product" value="Edit Product">
       </div>


        </div>
    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['edit_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];

    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    $product_image1_temp=$_FILES['product_image1']['tmp'];
    $product_image2_temp=$_FILES['product_image2']['tmp'];
    $product_image3_temp=$_FILES['product_image3']['tmp'];

//chcking for fiels is empty or not
    $product_price=$_POST['product_price'];
    if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('Please fill the all the fields')</script>";

    }else{
        move_uploaded_file($product_image1_temp,"./product_image/$product_image1");
        move_uploaded_file($product_image2_temp,"./product_image/$product_image2");
        move_uploaded_file($product_image3_temp,"./product_image/$product_image3");
// /query for update products
$update_products = "update `products` set category_id='$product_category', brand_id='$product_brands', product_title='$product_title', product_description='$product_description', product_price='$product_price', product_image1='$product_image1', product_image2='$product_image2', product_image3='$product_image3', date=NOW() where product_id=$edit_id";
$result_update=mysqli_query($con,$update_products);
if($result_update){
    echo"<script>alert('Product updated succesfully')</script>";
    echo"<script>window.open('../admin_area/index.php','_self')</script>";
}
    }
}

?>