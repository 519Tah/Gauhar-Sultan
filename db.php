<?php 
// PHP Fehlermeldung anzeigen:

error_reporting(EP_ALL);
ini_set('display_errors', true); 


// Zugangsdaten zur Datenbank 
$DB_HOST = "localhost"; // Host Adresse
$DB_NAME = "gauhar-sultan"; // database name
$DB_USER = "root"; //username
$DB_PASSWORD = ""; //passoword


/* Zeichenkodierung UTF-8 (utf8mb4) bei der Verbindung setzen,
 Infos: https://werner-zenk.de/tipps/schriftzeichen_richtig_darstellen.php
 Und eine PDOException bei einem Fehler auslösen. */
$OPTION = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   ];

try {
    //Verbindung zur Datenbank aufbauen
    $db = new PDO("mysql:host=". $DB_HOST . ";dbname=" . $DB_NAME, $DB_USER, $DB_PASSWORD, $OPTION);
}
catch(PDOException $e) {
    // Bei einer fehlerhaften Verbindung eine Nachricht ausgeben
    exit("Verbindung fehlgeschlagen!" . $e->getMessage());
}





?>