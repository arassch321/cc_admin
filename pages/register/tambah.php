<?php

require_once "../../app/config/config.php";
require_once "../../app/config/Database.php";

$DB = new Database();


if (isset($_POST["add_record"])) {
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];
    $gender = $_POST['gender'];
    if ($password != $repassword) {
        echo "<script>alert('Password berbeda!!');history.back()</script>";
    }

    $sql_id = "SELECT username FROM user WHERE username='$uname'";
    $DB->query($sql_id);
    $DB->execute();
    $result = $DB->rowCount();
    if ($result > 0) {
        echo "<script>alert('Username $uname sudah ada');history.back()</script>";
    } else {
        $query = "INSERT INTO user (nama, username, password, gender) VALUES (:name,:username,:password,:gender)";
        $DB->query($query);
        $DB->bind('name', $name);
        $DB->bind('username', $uname);
        $DB->bind('password', $password);
        $DB->bind('gender', $gender);
        $DB->execute();
        $row = $DB->rowCount();

        $query = "SELECT * FROM  user WHERE username= :usname AND password= :pass";
        $DB->query($query);
        $DB->bind('usname', $uname);
        $DB->bind('pass', $password);
        $DB->execute();
        $userdata = $DB->single();

        if ($row > 0) {
            $_SESSION['uname'] = $uname;
            $_SESSION['id_user'] = $userdata['id_user'];
            $_SESSION['gender_user'] = $userdata['gender'];

            header('Location: ' . base_url);
        }
    }
    // $sql = "INSERT INTO regist (nama, username, password, gender,) VALUES (:name,:username,:password,:gender)";
    // $stmt = $pdo_conn->prepare($sql);
    // $result = $stmt->execute(array(':nama' => $_POST['name'], ':username' => $_POST['username'], ':password' => $_POST['password'], ':gender' => $_POST['gender']));
}
