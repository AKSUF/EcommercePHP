<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-success mb-4">
    Delete Account
    </h1>
<form action="" method="post" class="mt-5">
<div class="form-outline mb-4">
<input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account"  >

</div>
<div class="form-outline">
<input type="submit" class="form-control w-50 m-auto" name="dontdelete" value=" Don't Delete Account"  >

</div>

</form>
<?php 
$username=$_SESSION['username'];
if (isset($_POST['delete'])) {
    $username = $_SESSION['username'];
    $delete_query = "DELETE FROM `user_table` WHERE username='$username'";
    $result = mysqli_query($con, $delete_query);
    if ($result) {
        session_destroy();
        echo "<script>alert('Account deleted successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if (isset($_POST['dontdelete'])) {
    echo "<script>window.open('../profile.php','_self')</script>";
}
?> 
</body>
</html>