<?php
$root = "../../..";
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();
if (!empty($_POST["save_record"])) {

	$username = $_POST['username'];
	$sql_id = "SELECT username FROM user WHERE username='$username'";
	$DB->query($sql_id);
	$DB->execute();
	$result = $DB->rowCount();
	if ($result > 0){
		echo "<script>alert('Username $username sudah ada');history.back()</script>";
}
else{
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
}
