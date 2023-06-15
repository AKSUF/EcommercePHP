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
    <label for="user_username">
        Username
    </label>
    <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required/>
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
    Password
    </label>
    <input type="password" id="conf_user_password" name="conf_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" required/>
</div>

<!-- Address field -->
<div class="front-outline">
    <label for="user_address">
    Password
    </label>
    <input type="user_address" id="user_address" name="user_address" class="form-control" placeholder="Enter your Address" autocomplete="off" required/>
</div>
<!-- Contact field -->
<div class="front-outline">
    <label for="user_contact">
    Password
    </label>
    <input type="user_contact" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your Contact" autocomplete="off" required/>
</div>
<div class="text-center mt-3 ">
    <input type="submit" value="register" class="bg-info py-2 px-3 border-0">
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