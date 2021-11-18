<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
	$root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();
$sql = "delete from user where id_user='" . $_GET['id_user']."'";
$DB->query($sql);
$DB->execute();
header('location:user.php');
?>