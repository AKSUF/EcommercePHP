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
        User Login
    </h2>
    <div class="row d-flex align-item-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">

<div class="front-outline">
    <label for="user_username">
        Username
    </label>
    <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required/>
</div>



<!-- password -->

<div class="front-outline">
    <label for="user_password">
    Password
    </label>
    <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required/>
</div>

<div class="text-center mt-3 ">
    <input type="submit" value="Login" class="bg-info py-2 px-3 border-0">
<p>Don't  have an account? <a href="./user_registration.php">Register</a></p>
</div>
</form>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>