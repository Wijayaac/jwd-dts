<?php
include 'connection.php';
$id = $_GET['id'];
$query ="DELETE FROM tbl_buku WHERE id='$id'";
if ($connection->query($query) === TRUE) {
    # code...
    mysqli_close($connection);
    header('location:index.php');
}else{
    echo 'error'. $connection->error;
}