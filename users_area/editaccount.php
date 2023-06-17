
<?php
include('./includes/connect.php');
if(isset($_GET['']))

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
    <input type="text" class="form- w-50 m-auto" name="username">
</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_email">
</div>
<div class="form-outline mb-4">
    <input type="file" class="form- w-50 m-auto" name="user_image">
    <img src="user_image/<?php echo $user_image; ?>" alt="">

</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_address">
</div>
<div class="form-outline mb-4">
    <input type="text" class="form- w-50 m-auto" name="user_mobile">
</div>
<input type="submit" class="bg-info py-2 px-3 border-0" value="update" name="update_account ">
 </form>
</body>
</html>