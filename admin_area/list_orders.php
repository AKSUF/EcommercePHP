<?php
include('../includes/connect.php');
?>

<div class="text-center text-success">All Orders</div>
<table class="table table-border mt-5">
    <thead class="bg-info">
        <tr>
            <td>Order_id</td>
            <td>User_id</td>
            <th>Due Amount</th>
            <th>Invoice Number</th>
            <th>Total Products</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary">
        <?php
        $get_orders = "SELECT * FROM `user_orders`";
        $result = mysqli_query($con, $get_orders);
        $row_count = mysqli_num_rows($result);
        if ($row_count == 0) {
            echo "<h2 class='bg-danger text-center mt-5'>No orders yet</h2>";
        } else {
            $number = 0;
            while ($row_data = mysqli_fetch_assoc($result)) {
                $order_id = $row_data['order_id'];
                $user_id = $row_data['user_id'];
                $amount_due = $row_data['amount_due'];
                $invoice_number = $row_data['invoice_number'];
                $total_products = $row_data['total_products'];
                $ordes_date   = $row_data['ordes_date'];
                $order_status = $row_data['order_status'];
                echo "
                <tr>
                    <td>$order_id</td>
                    <td>$user_id</td>
                    <td>$amount_due</td>
                    <td>$invoice_number</td>
                    <td>$total_products</td>
                    <td>$ordes_date</td>
                    <td>$order_status</td>
                    <td>Delete</td>
                </tr>
                ";
            }
        }
        ?>
    </tbody>
</table>
