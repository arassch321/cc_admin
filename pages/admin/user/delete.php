<?php
$root = "../../..";
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();
$sql = "delete from user where id_user='" . $_GET['id_user']."'";
$DB->query($sql);
$DB->execute();
header('location:user.php');
