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
        require 'include/db.php';

        // SQL-Statment formulieren: Alle Daten (ganze Tabelle)
        //zur Frage mit der  angegebenen $id auslesen
        $id = 222;
        $question = fetchQuestionsById($id, $dbConnection);
    ?> 

    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>   
    </div><!--header ende-->



    </div>

    <div class="container d-flex justify-content-center pt-5  pb-5 text-white bg-primary "> 
        <h1 class="col-4">Questions</h1>
    
        <p class="col-4"><?php echo   $question['question_text'];?></p>
    </div>

   <!-- <div class="container justify-content-center text-white">
            <h3 class="px-4 text-start">Frage ansich</h3>
            <br>
        <form class="px-4" action="./report.php" method="post">
          <div class="btn-group flex-wrap" id="button-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="1" autocomplete="off" checked>
            <label class="btn btn-outline-primary my-3" for="btnradio1"><?php echo $question['answer-1'];?></label>
 
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="2" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio2"><?php echo $question['answer-2'];?></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="3" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio3"><?php echo $question['answer-3'];?></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" value="4" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio4"><?php echo $question['answer-4'];?></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" value="5" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio5"><?php echo $question['answer-5'];?></label>
        </form>
    </div>-->


    <div class="container d-flex col-12 pt-5 text-primary">

        <img class="container col-3" src="/img/group-wild-african-animal-white_1308-56241.webp" alt="test" style="width: 33%;">
      
        <form class="container col-6" style="width:33%;" id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
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
            ?>
        </form>
        
        <img class="container col-3" src="/img/group-wild-african-animal-white_1308-56241.webp" alt="test"  style="width:33%;">
    
    </div>
      
    <div class="container-flex"><!--footer Start-->
          <?php include './include/footer2.php'?>  
    </div><!--footer Ende-->
</body>
</html>