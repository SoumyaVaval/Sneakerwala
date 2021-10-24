<?php
$url='localhost:4000';
$username='root';
$password='';
$database='dbproject';
$conn=mysqli_connect($url,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>