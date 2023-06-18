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
$select_cat="select * from `categories`";
$result=mysqli_query($con,$select_cat);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $category_id=$row['category_id'];
   
    $category_title=$row['category_title'];
    echo $category_title;
    $number++;
?>

        <tr>
            <td><?php echo $number;?></td>
            <td><?php echo $category_title;?></td>
            <td><a href="index.php?edit_category=<?php echo $category_id?>" class="text-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
             <td><a href="index.php?delete_category=<?php echo $category_id?>"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></a></td>
       
        </tr>
<?php

}
?>

    </tbody>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-body">
    <h4>Are you sure you ant to delete this!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="./index.php?view_categories">No</a></button>
        <button type="button" class="btn btn-primary"> <a href="index.php?delete_category=<?php echo $category_id?>" class="text-danger"><i class="fa-solid fa-trash"></i></a></button>
      </div>
    </div>
  </div>
</div>



</table>

