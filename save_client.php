<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$mail = $_POST['mail'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];


if (!isset($nom) | !isset($prenom) | !isset($adresse) | !isset($mail))
{
    echo (
    '<script language=\'javascript\'>
            alert( "Pas conforme")</script>
          ');
}

if ($pass1 != $pass2){

    echo (
    '<script language=\'javascript\'>
            alert( "Pas conforme")</script>
          ');
}


require_once ('conn.php');

$ps = $pdo->prepare("INSERT INTO client (nom, prenom, adresse, mail, password) VALUES(?,?,?,?,?)");

$params = array($nom, $prenom, $adresse, $mail, $pass1);


$ps->execute($params);

header("location: client.php");