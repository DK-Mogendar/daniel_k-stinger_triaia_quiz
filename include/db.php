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
function fetchQuestionById($id, $dbConnection) {
    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    return $row; 
}
function fetchQuestionsIdSequence($topic, $questionNum, $dbConnection) {
    //SELECT `id` FROM `questions`WHERE `topic` = 'animals' ORDER BY RAND() LIMIT 5;
    $query = "SELECT `id` FROM `questions` WHERE `topic` = '$topic' ORDER BY RAND() LIMIT $questionNum";
    $sqlStatement = $dbConnection->query($query);
    $rows = $sqlStatement->fetchAll(PDO::FETCH_COLUMN, 0); // ìd`ist Spalte (colm) 0.


    //print_r($row);
    /*
    Giebt zeilendaten als assoziatiever Array zu genau einer Frage zurück
    Beispiel: $row = array(id`=> 999)
    */

   
    return $rows; 
}



?>