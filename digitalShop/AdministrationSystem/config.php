<?php 

$conn = mysqli_connect('localhost', 'Admin', 'testtest', 'shop_db', 3306) or die('connection failed');

if (!$conn) {
    echo 'Connection Error ' . mysqli_connect_error();
}

?>