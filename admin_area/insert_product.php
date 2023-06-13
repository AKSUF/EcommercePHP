<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
 $product_title=$_POST['product_title'];
 $product_description=$_POST['product_description'];
 $product_keyword=$_POST['product_keyword'];
 $product_categories=$_POST['product_categories'];
 $product_brands=$_POST['product_brands'];
 $product_price=$_POST['product_price'];
 $product_status='true';
//  image
 $product_image1 =$_FILES['product_image1']['name'];
 $product_image2 =$_FILES['product_image2']['name'];
 $product_image3 =$_FILES['product_image3']['name'];
//  image temp name
$temp_image1=$_FILES['product_image1']['tmp_name'];
$temp_image2=$_FILES['product_image2']['tmp_name'];
$temp_image3=$_FILES['product_image3']['tmp_name'];
//checking empty condition
if($product_title=='' ){
    echo "<script>alert('Please fill all the available fields')</script>";
    exit();
}else{
    move_uploaded_file($temp_image1,"./product_image/$product_image1");
    move_uploaded_file($temp_image2,"./product_image/$product_image2");
    move_uploaded_file($temp_image3,"./product_image/$product_image3");
    
$insert_products="INSERT INTO `products` (product_title, product_description, product_keyword, category_id, brand_id, product_price, product_image1, product_image2, product_image3, date, status)
 VALUES ('$product_title','$product_description','$product_keyword','$product_categories','$product_brands','$product_price','$product_image1','$product_image2','$product_image3',NOW(),'$product_status')";

$result_query=mysqli_query($con,$insert_products);

if($result_query){
    echo "<script>alert('Successfully inserted the products')</script>";
}

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>

        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required>
            </div>

            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required>
            </div>

            <!-- Product keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product keyword" autocomplete="off" required>
            </div>

            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="product_categories" class="product_categories form-select">
                    <option value="">Select a category</option>
                    <?php
                    $select_query = "SELECT * FROM `categories`";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="product_brands" class="product_categories form-select">
                    <option value="">Select a brand</option>
                    <?php
                    $select_query = "SELECT * FROM `branch`";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" autocomplete="off" required>
            </div>

            <!-- Image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" autocomplete="off" required>
            </div>

            <!-- Image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" autocomplete="off" required>
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" placeholder="Enter product price" class="form-control" autocomplete="off" required>
            </div>

            <!-- Submit Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
