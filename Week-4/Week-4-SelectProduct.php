<?php
include 'DataBase.php';
include 'Settings.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM product
        WHERE brand = 'nike'
        ORDER BY productprice";
$result = $db -> query($sql);
$productlist = $result -> fetchAll();
$db -> close();
?>