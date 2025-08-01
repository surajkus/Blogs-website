<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="Blogs";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    echo "Coonection faild";


?>