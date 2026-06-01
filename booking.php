<?php

include 'db.php';

$name = $_POST['customer_name'];
$email = $_POST['email'];
$date = $_POST['booking_date'];
$time = $_POST['booking_time'];
$guests = $_POST['guests'];

$sql = "INSERT INTO table_reservations
(customer_name, customer_email, reservation_date, reservation_time, total_people)

VALUES

('$name','$email','$date','$time','$guests')";

if(mysqli_query($conn, $sql)){

    echo "Table Reserved Successfully";

}else{

    echo "Error: " . mysqli_error($conn);
}

?>