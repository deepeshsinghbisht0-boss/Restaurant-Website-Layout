<?php

include 'db.php';

$name = $_POST['customer_name'];
$message = $_POST['message'];

$sql = "INSERT INTO review_messages
(customer_name, customer_message)

VALUES

('$name','$message')";

if(mysqli_query($conn, $sql)){

    echo "Feedback Submitted Successfully";

}else{

    echo "Error: " . mysqli_error($conn);
}

?>