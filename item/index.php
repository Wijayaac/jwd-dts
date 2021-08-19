<?php
require_once('../templates/navbar.php');
require_once('../item/functions/get-all.php');

// its Work
$serverName = 'localhost';
$databaseName = 'db_jwd';
$username = 'phpmyadmin';
$password = 'ac';

// Create connection into database
$connection = mysqli_connect($serverName, $username, $password, $databaseName);

if (mysqli_connect_errno()) {
    die('Connection failed : ' . mysqli_connect_error());
}
// * NOT Working
// include('./utils/connection.php');
// $connection = connectDB();
$items = getItems($connection);
?>
<div style=" max-width: 540px;" class="container my-5 py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brands</th>
                <th scope="col">Color</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($item = mysqli_fetch_array($items)) {
            ?>
                <tr>
                    <th scope="row"><?= $item['id'] ?></th>
                    <td><?= $item['brand'] ?></td>
                    <td><?= $item['color'] ?></td>
                    <td><?= $item['total'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="content row row-cols-2">

    </div>
</div>

<?php
require('../templates/bottom.php')
?>