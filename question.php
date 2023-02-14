<?php
  require "./include/data-collector.php"  //Muss ganz am anfang der Hauptseite sein,
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

<!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!--Boostrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<!--einbindung Javascript und Css Dokument-->
    <link rel="stylesheet" href="/assets/css/style.css">  
    <script src="/assets/js/main.js"></script>
</head>
<body>
    <?php 
        // Bestimme die Anzahl der verfügbaren Fragen
        if (isset($quiz["questionIdSequence"])) {
            $id = $quiz["questionIdSequence"][$currentQuestionIndex];
        } 

        // Hole alle Datenfelder zur Frage mit $id von der Datenbank
        $question = fetchQuestionById($id, $dbConnection);
    ?> 
    <div class="container-flex"><!--header start--> 
        <?php include './include/header.php' ?>   
    </div><!--header ende-->

    <!--FORMULAR "Fragestellung"-->
    <div class="row" STYLE="padding: 20px;">
        <div class="colsm-8">
            <!--Fragestellung-->
            <h7>Frage<?php echo ($currentQuestionIndex +1); ?> von <?php echo $quiz["question"];?></h7>
            <p>&nbsp;</p>
            <h3><?php echo $question["question_text"];?>/h3>
            <p>&nbsp;</p>

            <form id="quiz-form" action="<?php echo $actionUrl; ?>" method="post" onsubmit="return navigate('next');">
                <?php 
                    // Generelle Antwort_Radio_Buttons mit Beschriftung

                    // Single Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["correct"]
                    $correct = $question["correct"];

                    for ($a =1; $a <= 5; $a++) {
                        // Setze für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
                         $answerColumnName = "answer-" . $a;


                        // Falls es überhaupt Antworttext in $question[$answerColumnName] gibt
                        // und der Antwortext nicht gleich '', dann ...
                        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                            // Holt den Antworttext aus $question.
                            $answerText = $question[$answerColumnName];

                            // Entscheide für $value, wieviele Punkte die Anwort ergibt: 
                            // richtig -> 1 Punkt, falsch -> 0 Punkte
                            if ($correct === $answerColumnName) $value = 1;
                            else $value = 0;

                            echo "<div class='form-check'>
                                    <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
                                    <label class='form-check-label' for='$answerColumnName'>$answerText</label>
                                  </div>";
                        }
                    }

                ?>

                <!--input type="hidden"
                    questionNum, lastQuestionIndex: mit PHP gesetzt
                    indexStep: mit JavaScript setIntValue(fieldId, value) verändert
                -->

                <input type="hidden" id="questionNum" value="<?php echo $quiz["questionNum"]; ?>">
                <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?> ">
                <input type="hidden" id="indexStep" name="indexStep" value="1">

                <!-- Validierungswarnung -->
                <p id="validation-warning" class="warning"></p>

                <!-- submit -->
                <!-- button type="submit" class="btn btn-primary" onclick="navigatePrevious();">Previous</button -->
                <button type="submit" class="btn btn-primary" 
                        style="position:fixed;bottom:150px;">Next</button>
                <p class="spacer"></p>
            </form>
        </div>
    </div>
            
    <div class="container-fluid"><!--footer Start-->
          <?php //include './include/footer2.php'?>  
    </div><!--footer Ende-->

</body>
</html>