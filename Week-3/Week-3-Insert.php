<?php
include 'DataBase.php';
include 'Settings.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
$sql = "INSERT INTO product (productname, productdescription, productcode, category, brand, productprice, productimg, delete-status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$result = $db -> query($sql, $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $Images_Dir, $_POST['delete-status']);
$db -> close();
?>