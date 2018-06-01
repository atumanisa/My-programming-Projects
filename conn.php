<?php
/**
 * Created by PhpStorm.
 * User: ATUMANISA
 * Date: 20-05-18
 * Time: 00:10
 */

try{
    $strConnection = 'mysql:host=localhost; dbname=magasin';
    $pdo = new PDO ($strConnection,'root','');
}
catch (PDOException $e){
    $msg = 'ERROR PDO' . $e->getMessage();
    die ($msg);
}

?>