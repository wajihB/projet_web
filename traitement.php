<?php 
$Network = 'localhost';
$BDname = 'ecotun';
$UserName = 'root';
$Password = 'root';

try {
    $strConnection = 'mysql:host='.$Network.';dbname='.$BDname; 
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $pdo = new PDO($strConnection, $UserName, $Password, $arrExtraParam); // Instancie la connexion.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}



}


?>

