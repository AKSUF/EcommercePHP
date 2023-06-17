
<?php
include('./includes/connect.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>

</head>
<body>
<?php 
$username=$_SESSION['username'];
$get_user="SELECT * FROM user_table WHERE username='$username'";
$result=mysqli_query($con,$get_user);
$row_fetch=mysqli_fetch_assoc($result);
$user_id=$row_fetch['user_id'];
?>
    <h2>Hello ordes</h2>
    <table class="table table-bordered mt-5">
    <thead class="bg-info">  
<tr>
 <th>SI no</th>
 <th>Amount Due</th>
 <th>Total products</th>
 <th>Invoice number</th>
 <th>Date</th>
 <th>Complete/Incomplete</th>
 <th>Status</th>
</tr>
</thead>  
<tbody class="bg-secondary">
<?php
$get_order_details="select * from `user_orders` where user_id=$user_id";
$resul_orders=mysqli_query($con,$get_order_details);
$number = 1;
while ($row_order = mysqli_fetch_assoc($resul_orders)) {
    // Rest of your code
    
    echo "
    <tr>
        <td>$number</td>
        <td>$amount_due</td>
        <td>$invoice_number</td>
        <td>$total_products</td>
        <td>$orders_status</td>
        <td>$orders_date</td>
        <td><a href='confirm_payment.php'>Confirm</a></td>
    </tr>
    ";
    
    $number++; // Increment the row number
}

?>
</tbody>

    </table>
</body>
</html>