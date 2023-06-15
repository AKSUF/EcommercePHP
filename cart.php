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
  <style>
    .cart_image {
      width: 100px;
      /* Set the desired width for the image */
      height: auto;
      /* Maintain the aspect ratio */
      display: block;
      /* Ensure the image is displayed as a block element */
      margin: 0 auto;
      /* Center the image horizontally */
    }
  </style>
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
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display_all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

          </ul>


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

          <a href="" class="anv-link">
            login
          </a>
        </li>

      </ul>
    </nav>


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
    <div class="container">
      <div class="row">
        <form action="" method="post">
          <div class="table-responsive">
            <table class="table table-bordered text-center">

              <tbody>
                <?php
                global $con;
                $get_ip_add = getIPAddress();
                $total_price = 0;
                $cart_query = "SELECT * FROM `cart` WHERE ip_adress='$get_ip_add'";
                $result = mysqli_query($con, $cart_query);
                $result_count = mysqli_num_rows($result);
                if ($result_count > 0) {
                  echo "  <thead>
<tr>
    <th>Product Title</th>
    <th>Product Image</th>
    <th>Quantity</th>
    <th>Total Price</th>
    <th>Remove</th>
    <th>Operations</th>
</tr>
</thead>";

                  while ($row = mysqli_fetch_array($result)) {
                    $product_id = $row['product_id'];
                    $select_product = "SELECT * FROM `products` WHERE product_id='$product_id'";
                    $result_products = mysqli_query($con, $select_product);

                    while ($row_product_price = mysqli_fetch_array($result_products)) {
                      $product_price = $row_product_price['product_price'];
                      $price_table = $row_product_price['product_price'];
                      $product_title = $row_product_price['product_title'];
                      $product_image1 = $row_product_price['product_image1'];
                      $product_values = $product_price;
                      $total_price += $product_price;
                ?>
                      <tr>
                        <td><?php echo $product_title; ?></td>
                        <td><img src="./images/<?php echo $product_image1; ?>" alt="" class="cart_image"></td>
                        <td><input type="text" name="quality" id="" class="form-input">
                        </td>
                        <?php
                        global $con;
                        $get_ip_add = getIPAddress();
                        var_dump($get_ip_add);

                        if (isset($_POST['update_cart'])) {
                          $quantities = $_POST["quality"];

                          $update_cart = "UPDATE `cart` SET quality=$quantities WHERE ip_adress='$get_ip_add'";
                          $result_query_update = mysqli_query($con, $update_cart);
                          $total_price = $total_price * $quantities;
                        }
                        ?>
                        <td><?php echo $product_price; ?></td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>

                        <td>
                          <input type="submit" name="update_cart" value="Update" class="bg-info px-3 py-2 border-0 mx-3">
                          <input type="submit" name="remove_cart" value="Remove" class="bg-info px-3 py-2 border-0 mx-3">
                        </td>
                      </tr>
                <?php
                    }
                  }
                } else {
                  echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                }
                ?>
              </tbody>
            </table>


            <!-- subtotal -->
          </div>
          <div class="d-flex">

            <?php
            $get_ip_add = getIPAddress();
            $cart_query = "SELECT * FROM `cart` WHERE ip_adress='$get_ip_add'";
            $result = mysqli_query($con, $cart_query);
            $result_count = mysqli_num_rows($result);
            if ($result_count > 0) {
              echo "<h4 class='px-3'>Subtotal: <strong class='text-info'>$total_price</strong></h4>
        <input type='submit' name='continue_shopping' value='Continue Shopping' value='Remove' class='bg-info px-3 py-2 border-0 mx-3'>
        <a href='#' class='mx-3'><button class='bg-danger px-3 border-0'>Checkout</button></a>";
            } else {
              "  <input type='submit' name='continue_shopping' value='Continue Shopping' value='Remove' class='bg-info px-3 py-2 border-0 mx-3'>";
            }
            if (isset($_POST['continue_shopping'])) {
              echo "<script>window.open('index.php','_self')</script>";
            }

            ?>


          </div>
        </form>
        <!-- function to remove item -->
        <?php
        function remove_cat_item()
        {
          global $con;
          if (isset($_POST['remove_cart'])) {
            foreach ($_POST['removeitem'] as $remove_id) {
              echo $remove_id;
              $delete_query = "Delete from `cart` where product_id=$remove_id";
              $run_delete = mysqli_query($con, $delete_query);
              if ($run_delete) {
                echo "<script>window.open('cart.php','_self')</>";
              }
            }
          }
        }
        echo $remove_item = remove_cat_item();
        ?>

      </div>
    </div>


    <!-- CDN for jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CDN for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/nm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
p

</html>