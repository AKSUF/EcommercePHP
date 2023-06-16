<?php
include('../includes/connect.php');
include('../function/abcommon.php');

if(isset($_POST['user_register'])){
    $user_username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_address = $_POST['user_address'];
    $user_mobile = $_POST['user_mobile'];
    $conf_user_password=$_POST['conf_user_password'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();

$select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'";
$result=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($result);
if($row_count>0){
    echo "<script>alert('Username already exists')</script>";

}else if($user_password!=$conf_user_password){
    echo "<script>alert('Give the confirm password')</script>";

}
else{

    move_uploaded_file($user_image_tmp, "./users_image/$user_image");

    $insert_query = "INSERT INTO user_table (username, user_email, user_password, user_address, user_mobile, user_image, user_ip)
                     VALUES ('$user_username', '$user_email', '$hash_password', '$user_address', '$user_mobile', '$user_image', '$user_ip')";

    $sql_execute = mysqli_query($con, $insert_query);

}
 
// Selecting cart items
$select_cart_item = "SELECT * FROM cart WHERE ip_adress = '$user_ip'";
$result_count = mysqli_query($con, $select_cart_item);
$rows_count = mysqli_num_rows($result_count);

if ($rows_count > 0) {
    if (!isset($_SESSION['username'])) {
        // User is not logged in, redirect to login page
        echo "<script>alert('You need to log in to proceed with payment')</script>";
        echo "<script>window.open('user_login.php','_self')</script>";
    } else {
        // User is logged in, proceed to payment page
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
} else {
    if (!isset($_SESSION['username'])) {
        // User is not logged in, redirect to login page
        echo "<script>window.open('user_login.php','_self')</script>";
    } else {
        // User is logged in, redirect to index page
        echo "<script>window.open('../index.php','_self')</script>";
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container-fluid my-3">
    <h2 class="text-center">
        New User Registration
    </h2>
    <div class="row d-flex align-item-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="front-outline">
                    <label for="username">
                        Username
                    </label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" autocomplete="off" required/>
                </div>
                <div class="front-outline">
                    <label for="user_email">
                        Email
                    </label>
                    <input type="text" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required/>
                </div>
                <!-- Image1 -->
                <div class="front-outline">
                    <label for="user_image">
                        User image
                    </label>
                    <input type="file" id="user_image" name="user_image" class="form-control" placeholder="Enter your email" autocomplete="off" required/>
                </div>

                <!-- password -->

                <div class="front-outline">
                    <label for="user_password">
                        Password
                    </label>
                    <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required/>
                </div>
                <!-- confirm password -->
                <div class="front-outline">
                    <label for="conf_user_password">
                        Confirm Password
                    </label>
                    <input type="password" id="conf_user_password" name="conf_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" required/>
                </div>

                <!-- Address field -->
                <div class="front-outline">
                    <label for="user_address">
                        User Address
                    </label>
                    <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your Address" autocomplete="off" required/>
                </div>
                <!-- Contact field -->
                <div class="front-outline">
                    <label for="user_contact">
                        Contact
                    </label>
                    <input type="text" id="user_mobile" name="user_mobile" class="form-control" placeholder="Enter your Contact" autocomplete="off" required/>
                </div>

                <div class="text-center mt-3 ">
                    <input type="submit" value="register" class="bg-info py-2 px-3 border-0" name="user_register">
                    <p>Already have an account? <a href="./user_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>
