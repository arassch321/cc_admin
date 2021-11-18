<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
	$root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();

if (!empty($_POST["save_record"])){
    $sql = "update user set nama='". $_POST['nama']."', username='".$_POST['username']."', password='".$_POST['password']."', gender='".$_POST['gender']."' WHERE id_user='".$_POST['id_user']."'";
    $DB->query($sql);
    $DB->execute();
    header('location:user.php');
}

?>