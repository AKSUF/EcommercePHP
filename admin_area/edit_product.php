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
            <input type="text" id="product_title" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_description" class="form-label">
                Product Description
            </label>
            <input type="text" id="product_description" name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_keyword" class="form-label">
                Product Description
            </label>
            <input type="text" id="product_keyword" name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_categories" class="form-label">
                Product Categories
            </label>
         <select name="product_category" class="form-control">
<option value="">1</option>
<option value="">2</option>
<option value="">3</option>
<option value="">4</option>
<option value="">5</option>

         </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_brand" class="form-label">
                Product Brand
            </label>
         <select name="product_brands" class="form-control">
<option value="">1</option>
<option value="">2</option>
<option value="">3</option>
<option value="">4</option>
<option value="">5</option>

         </select>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_keyword" class="form-label">
                Product Image1
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image1" class="form-control" required="required">
            <img src="../admin_area/product_image/pexels-felix-mittermeier-957039.jpg" alt="" class="productimage">
            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_keyword" class="form-label">
                Product Image2
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image1" class="form-control" required="required">
            <img src="../admin_area/product_image/pexels-felix-mittermeier-957039.jpg" alt="" class="productimage">

            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_keyword" class="form-label">
                Product Image3
            </label>
            <div class="d-flex">
            <input type="file" id="product_keyword" name="product_image1" class="form-control" required="required">
            <img src="../admin_area/product_image/pexels-felix-mittermeier-957039.jpg" alt="" class="productimage">

            </div>
        </div>

       <div class="text-center mt-3">
        <input type="submit" name="edit_product" value="Edit Product">
       </div>


        </div>
    </form>
</div>
</body>
</html>