<?php

$DB_SERVER='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_NAME='sd-login';

$conn=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}
echo "Successfully connect";
?>