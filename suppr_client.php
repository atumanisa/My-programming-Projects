<?php
$code = $_GET['code'];

require_once ('conn.php');

$ps = $pdo->prepare("DELETE FROM client WHERE id_client = ?");

$params = array($code);
$ps->execute($params);
header("location: client.php");

?>