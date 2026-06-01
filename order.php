<?php

include 'db.php';

$name = $_POST['customer_name'];
$phone = $_POST['phone'];
$food = $_POST['food_item'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

$sql = "INSERT INTO customer_orders
(customer_name, customer_phone, food_name, quantity, delivery_address)

VALUES

('$name','$phone','$food','$quantity','$address')";

if(mysqli_query($conn, $sql)){

    echo "Food Order Placed Successfully";

}else{

    echo "Error: " . mysqli_error($conn);
}

?>