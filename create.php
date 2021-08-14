<?php
include './utils/connection.php';

$name = $_POST['name'];
$comment = $_POST['comment'];

$query = "INSERT INTO post_comments(name,comment) values('$name','$comment')";

$insert = mysqli_query($connection, $query);
if ($insert) {
    // Redirect into index
    echo '<script type="text/javascript">
           window.location = "http://jwd-dts/"
      </script>';
}