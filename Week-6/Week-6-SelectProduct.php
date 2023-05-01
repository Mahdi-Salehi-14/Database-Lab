<?php
include 'DataBase.php';
include 'Settings.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
$sql1 = "SELECT * FROM `product`
        ORDER BY productprice
        LIMIT 5";
$sql2 = "SELECT * FROM `product`
        ORDER BY id DESC
        LIMIT 5";
$result1 = $db -> query($sql1);
$result2 = $db -> query($sql2);
$productlist1 = $result1 -> fetchAll();
$productlist2 = $result2 -> fetchAll();
$db -> close();
?>