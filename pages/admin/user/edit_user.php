<?php
$root = "../../..";
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();

if (!empty($_POST["save_record"])){
    $sql = "update user set nama='". $_POST['nama']."', username='".$_POST['username']."', password='".$_POST['password']."', gender='".$_POST['gender']."' WHERE id_user='".$_POST['id_user']."'";
    $DB->query($sql);
    $DB->execute();
    header('location:user.php');
}
