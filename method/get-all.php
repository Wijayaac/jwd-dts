<?php

function getComment($connection)
{
    $query = 'SELECT name, comment, date FROM post_comments';
    $comments = mysqli_query($connection, $query);
    return $comments;
}
