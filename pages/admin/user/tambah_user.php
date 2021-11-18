<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
	$root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();
if (!empty($_POST["save_record"])) {

	$sql = "INSERT INTO user (nama, username, password, gender) VALUES (:nama,:username,:password,:gender)";
	$DB->query($sql);
	$DB->bind('nama', $_POST['nama']);
	$DB->bind('username',  $_POST["username"]);
	$DB->bind('password',  $_POST["password"]);
	$DB->bind('gender',  $_POST["gender"]);

	$DB->execute();
	$DB->rowCount();
	if (!empty($DB->rowCount())) {
		header('location:user.php');
	} else {
		echo 'Gagal menambahkan user';
	}
}
