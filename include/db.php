<?php
// Verbinde mit mysql mit hife eines PHP PDO Objects
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8",$dbUser,$dbPassword);

// Setze den Fehlermodus für web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//QUERY Function------------------------------------------------------------------------------------------------------------------------------------------
function fetchQuestionsById($id, $dbConnection) {
    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    //print_r($row);
    /*
    Giebt zeilendaten als assoziatiever Array zu genau einer Frage zurück
    Beispiel: $row = array(id`=> 999)
    */
    return $row; 
}
?>