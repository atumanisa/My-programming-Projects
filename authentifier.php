<?php

$mail = $_POST['usermail'];
$password = md5($_POST['password']);

require_once ("conn.php");

$ps = $pdo->prepare("SELECT * FROM  client WHERE mail=? AND password=?");

$params = array($mail, $password);

$ps->execute($params);

if($user = $ps->fetch()){

    session_start();
    $_SESSION['PROFILE'] = $user;
    header("location:client.php");

}
else{
    header("location:login.php");
}


?>