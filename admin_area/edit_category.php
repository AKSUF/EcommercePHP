<?php
include('../includes/connect.php');
?>

<?php
if (isset($_GET['edit_category'])) {
    $edit_category = $_GET['edit_category'];
    $get_categories = "SELECT * FROM `categories` WHERE category_id=$edit_category";
    $result = mysqli_query($con, $get_categories);
    $row = mysqli_fetch_assoc($result);
    $category_title = $row['category_title'];
}

if (isset($_POST['edit_category'])) {
    $cat_title = $_POST['category_title'];
    $update_query = "UPDATE `categories` SET category_title='$category_title' WHERE category_id=$edit_category";
    $result_cat = mysqli_query($con, $update_query);
    if ($result_cat) {
        echo "<script>window.open('../admin_area/edit_category.php','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label">Category Title</label>
            <input type="text" value="<?php echo $category_title ?>" name="category_title" id="category_title" class="form-control" required="required">
        </div>
        <input type="submit" name="edit_category" value="Update Category" class="btn btn-info">
    </form>
</div>
