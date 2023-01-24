<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbLaundry';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(mysqli_connect_error()){
    printf("Connected Filed : ", mysqli_connect_error());
    exit();
}
