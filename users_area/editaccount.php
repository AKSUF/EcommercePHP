
<?php
include('./includes/connect.php');
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $select_query="select * from `user_table` where username='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['username'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_mobile=$row_fetch['user_mobile'];
    $user_image=$row_fetch['user_image'];
    if(isset($_POST['user_update'])){
        $user_name=$_POST['username'];
        $user_email=$_POST['user_email'];
        $user_address=$_POST['user_address'];
        $user_mobile=$_POST['user_mobile'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_temp=$_FILES['user_image']['tmp'];
        move_uploaded_file($user_image_temp,'./users_image/$user_image');
        $update_data="update 'user_table' set username='$username',user_email";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Acount</title>
</head>
<body>
 <h3 class="text-center text-success mb-3">Edit Account</h3>
 <form action="" method="post" enctype="multipart/form-data">
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="username" value="<?php echo $user_name?>" >
</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_email" value="<?php echo $user_email?>">
</div>
<div class="form-outline mb-4">
    <input type="file" class="form- w-50 m-auto" name="user_image">
</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_address" value="<?php echo $user_address?>">
</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_mobile" value="<?php echo $user_mobile?>">
</div>
<input type="submit" class="bg-info py-2 px-3 border-0" value="update" name="update_account ">
 </form>
</body>
</html>