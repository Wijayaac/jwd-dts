<?php
include './utils/connection.php';

$name = $_POST['name'];
$comment = $_POST['comment'];

$query = "INSERT INTO post_comments(name,comment) values('$name','$comment')";

$insert = mysqli_query($connection, $query);
if ($insert) {
    //membuat metode redirect dengan kode 301
    header('location:index.php', true, 301);
    //membuat kode di bawah header tidak diproses oleh website sehingga lebih aman
    exit();
} else {
    header('location:index.php', true, 301);
}
