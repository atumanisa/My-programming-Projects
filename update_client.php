<?php

$code = $_POST['code'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$mail = $_POST['mail'];

require_once ("conn.php");

$ps = $pdo->prepare("UPDATE  client SET nom=?, prenom=?, adresse=?, mail=? WHERE id_client=?");

$params = array($nom, $prenom, $adresse, $mail, $code);


$ps->execute($params);

header("location: client.php");