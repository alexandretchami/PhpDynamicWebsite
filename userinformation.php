<?php 

$conn = mysqli_connect('localhost','root','','phpdynamicwebsite_db') or die('query failed');

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";
mysqli_query($conn, $query);

echo "MESSAGE IS SENT";

?>