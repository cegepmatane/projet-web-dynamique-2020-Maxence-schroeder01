<?php
    namespace OneSheet;
    require_once '../lib/onesheet/autoload.php';  
    $tableur = new Writer('');
    $ip = $_SERVER['REMOTE_ADDR'];
    $tableur->addRow(array($ip, date('d F Y')));
    $tableur->addRow(array('Retour vers le futur', '150 minutes'));    
    $tableur->writeToFile('IP.xlsx');
?> 
