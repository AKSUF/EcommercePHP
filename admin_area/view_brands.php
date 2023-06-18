<?php
include('../includes/connect.php');
?>
<h3 class="text-center text-success">
All catagerois  Hello
</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>SI.no</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
<?php
$select_cat="select * from `branch`";
$result=mysqli_query($con,$select_cat);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $category_id=$row['brand_id'];
    $category_title=$row['brand_title'];
    $number++;
?>

        <tr>
            <td><?php echo $number;?></td>
            <td><?php echo $category_title;?></td>
            <td><a href="" class="text-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="index.php?delete_brands=<?php echo $delete_brands?>" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
<?php

}
?>

    </tbody>
</table>