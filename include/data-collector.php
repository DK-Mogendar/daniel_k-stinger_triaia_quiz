<?php /*session _start() Muss vor dem Gebrauch von $_SESSIO ausgeführt werden.
        Dazu muss das data-collector.php ganz am Anfang einer Haupseite  per
        'Iclude' oder 'require? referenziert werden*/
session_start();

include './include/tools.php';

//Fals verfügbar hole die Quiz-Daten aus der SESSIO.
if (isset($_SESSION["quiz"])) $quiz = $_SESSION["quiz"];
else $quiz = null;

prettyPrint($quiz, '$quiz =');

/*
Hole die Indexnummer der letzten Frage aus $_POST " lastQuestionIndex".
$lstQuestionIndex wird für question.php und report.php verwendent, jedoch
nicht für index.php
*/

if(isset($_post["lastQuestionIndex"])){
    // https://www.php.net/manual/en/funktion.intervall.php
    $lastQuestionIndex = intval($_POST["lastQuestionIndex"]);
}
else {
    // -1 soll bedeuten, dass das Quiz noch nicht gestarted wurde.
    $lastQuestionIndex = -1;
}
prettyPrint($lastQuestionIndex, '$lastQuestionIndex =');









// Abhängig von der aktuellen Haupseite: Bereite die benötigten Seitendaten vor.
$scriptName = $_SERVER['SCRIPT_NAME'];// https://www.php.net/manual/en/variabel.server.php
prettyPrint($scriptName, '$scriptName =');
prettyPrint($_POST, '$_POST =');
//index.php (Startseite)-------------------------------------------------------------------------------------------
if (str_contains($scriptName, 'index')) {// https://www.php.net/manual/en/funktion.str-contains.php
//Lösche die Daten, inklusieve bestehende Quiz-Daten in der £_SESSION.
    session_unset();
// Setze explizit auch $puiz zurück (Konsistenz gegenüber $session)
    $quiz = null;
}

//question.php (Frageseite)----------------------------------------------------------------------------------------
else if (str_contains($scriptName, 'question')) {
    if($lastQuestionIndex === -1 ) { //-1 bedeuted, dass das Quiz noch nicht gestartet wurde.
        //Starte ein neues Quiz...
        $quiz = array(
            "topic" => $_POST["topic"],
            "questionNum" => $_POST["questionNum"],
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIdSequence" => array()
        );
    }

    /*.....-

    */

    $indexStep = 1;

    if (isset($_POST["indexStep"])) {
        // https://www.php.net/manual/en/function.interval.php
        $indexStep = intval($_POST["indexStep"]);
    }

    // Index der aktuellen Frage, sowie für das Quiz setzten.
    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
}












//..... 
$scriptName = $_SERVER['SCRIPT_NAME'];
echo "scriptName = " . $scriptName . "<br>";
prettyPrint($scriptName, '$scriptName =');
?>
