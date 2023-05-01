<?php
include 'DataBase.php';
include 'Settings.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
$sql = "UPDATE product SET
                productname = ?,
                productdescription = ?,
                productcode = ?,
                category = ?,
                brand = ?,
                productprice = ?,
                productimg = ?,
                delete-status = ?
                WHERE id = {$pid}";
$Images_Dir = "Images" . "/" . $_POST['productimg'];
$result = $db -> query($sql, $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $Images_Dir, $_POST['delete-status']);
$db -> close();
?>