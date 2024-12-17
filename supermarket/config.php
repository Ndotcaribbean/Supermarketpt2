<?php
//database connection file
$conn = mysqli_connect('localhost', 'root', '', 'test_db'); //1 2

if(!$conn){
    echo 'mysqli_connect_error()';
    die('Connection Failed: '.mysqli_connect_error());
}
//echo "Connected successfully"; //testing
?>
            