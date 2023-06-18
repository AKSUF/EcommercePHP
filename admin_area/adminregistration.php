<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow:hidden;

        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
<h2 class="text-center mb-2">
Admin Registration
</h2>
    </div>
<div class="row d-flex justify-center align-item-center m-auto">
<div class="col-lg-6 ">
    <img src="../images/springboot.png" alt="">
</div>
<div class="col-lg-6">
<form action="">
<div class="form-outline mb-4">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" name="username" placeholder="Enter your username">
</div>
<div class="form-outline mb-4">
    <label for="email" class="form-label">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter your username">
</div>
<div class="form-outline mb-4">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password">
</div>
<div class="form-outline mb-4">
    <label for="confirmpassword" class="form-label">Confirm Password</label>
    <input type="password" id="copassword" name="copassword" placeholder="Cnfirm your password">
</div>
<div class="form-outline mb-4">
  
    <input type="submit" id="adminregis" name="adminregis" value="Register">
</div>
<p>Don't have any account?<a href="./admin_login.php">Login</a></p>
</form>
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>  
</body>
</html>