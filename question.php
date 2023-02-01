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
</head>
<!--Bootstrap 5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!--Boostrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<!--einbindung Javascript und Css Dokument-->
<link rel="stylesheet" href="/assets/css/style.css">  
        <script src="/assets/js/main.js"></script>
<body>
    <?php 
        // SQL-Statment formulieren: Alle Daten (ganze Tabelle)
        //zur Frage mit der  angegebenen $id auslesen
        $id = 222;
        $question = fetchQuestionsById($id, $dbConnection);
    ?> 
<!--hidden ist ein verstecktes Feld das nich angezeigt wird-->
<input type="hidden" id="questionNum" value="15">
<input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="11">
<input type="hidden" id="indexStep" name="indexStep" value="1">

    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>   
    </div><!--header ende-->



    <div class="titelbox container d-flex justify-content-center p5 text-white bg-primary "> 
        <h1 class="titel col-4">Questions</h1>
    
        <p class="titel col-4"><?php echo   $question['question_text'];?></p>
    </div>


    <div class="container d-flex col-12 pt-5 text-dark">

        <img class="container-flex col-4" src="/assets/img/tier.png" alt="test">
      
        <form class="frage p-5 container-flex col-4"  id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
            <?php 

            //Generiere Antwort.Radio-Bittons mit Beschriftung

            //Singel Choice: Hole den Namen  der richtigen Antwortspalte in $correct, aus $question["correct"]
            $correct = $question["correct"];

            for ($a = 1; $a <= 5; $a++) {
                //Setzte für $answerColumnName den Namen der Tabellensplte "answer-N" zusammen
                $answerColumnName = "answer-" . $a;

                //Falls es überhaubt Antworttext in $question[$answerColumnName]gibt
                //und der Antworttext nicht gleich '', dann ...

                if (isset($question[$answerColumnName]) && $question[$answerColumnName]  !== '') {
                    //....hole den antworttext aus $question.
                    $answerText = $question[$answerColumnName];

                    //Entscheide für $value, wieviele Punkte die Antwort ergiebt:
                    //richtig -> 1 Punkt, falsch -> 0 Punkte
                    if ($correct === $answerColumnName) $value = 1;
                    else $value = 0;
                    


                    echo "<div class='form-check'>
                            <input class='form-check-input' type='radio' name='singel-choice id='$answerColumnName' value='$value'>
                            <label class='form-check-label' for='single-choice-0'>$answerText</label>
                        </div>";
                    }
                }
            ?><!--submitbutton-->
             <button type="submit" class="btn btn-primary">Weiter</button>
        </form>
        
        <img class="container col-4" src="/assets/img/tier.png" alt="test">
    
    </div>

    <!--Mein Button um zurück zur Startseite zu kommen-->
    <button class="buton" type="buton" class= "btn btn-info " onclick="document.location='index.php';">
            Zurück zum Anfang
            <span style='font-size:50px;'>&#128512;</span>

    <div class="container-fluid"><!--footer Start-->
          <?php //include './include/footer2.php'?>  
    </div><!--footer Ende-->
</body>
</html>