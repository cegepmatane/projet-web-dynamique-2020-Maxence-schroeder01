<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$usager = 'root';
$motdepasse = 'Max14@Prime@';//ou " Max14@Prime@ " à toi de test
$hote = 'localhost';
$base = 'Transformers';

$dsn = 'mysql:dbname='.$base.';host=' . $hote;
$basededonnees = new PDO($dsn, $usager, $motdepasse);

?>
