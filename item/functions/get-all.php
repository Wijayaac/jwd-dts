<?php

function getItems($connection)
{
    $query = 'SELECT * FROM item';
    $items = mysqli_query($connection, $query);
    return $items;
}
