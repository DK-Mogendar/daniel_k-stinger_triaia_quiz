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
    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>     
    </div>
<br>
<br>
<br>
<br>
<br>

<!-- FORMULAR "Themenwahl"-->
    <div class="frage container justify-content-center p-5 col-10" style="padding: 20px;">
        <form class="" id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');"> 
            <!--Themenauswahl-->
            <label for="quiz-topic" class="thema"form-label>Quiz topic - select question   </label>
            <select  class="form-select" aria-label="Default select exemple" id="topic" name="topic">
                <!--<option value="music">Music</option>
                <option value="ch-norris">Ch Norris</option>-->
                <option value="animals">Animals</option>
                <!--<option value="movies">Movies</option>
                <option value="d-n-d">D&D</option>
                <option value="astronautics">Astronautics</option>
                <option value="technology">Technologyy</option>
                <option value="ai">AI</option>
                <option value="geography">Geographys</option>
                <option value="sports">Sports</option>
                <option value="science">Science</option>
                <option value="informatics">Informatics</option>
                <option value="gen-knowledge"ograp>Gen Knowledge</option>
                <option value="basketball">Basketball</option>-->
            </select>

            <!--Anzahl Fragen-->
            <label style="margin-top:20px;" for="questionNum" class="anzahl form-label">Number of Question</label>      
            <input style="width:100px" type="number" class="form-control" 
                  id="questionNum" name="questionNum" 
                  min="2" max="40" value="10">
            <!--
              input type="hidden"
              lastQuestionIndex: mit PHP gesetzt
              indexStep: mit JavaScript setValue.......
            -->
            <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
            <input type="hidden" id="indexStep" name="indexStep" value="1">

            <p id=" validation-warning" class="warnig"></p>

            
            <!--submitbutton-->
            <input style="margin-top:20px;" type="submit" value="Start">
        </form>
    </div>
    <div>   <!--footer Start-->
        <?php include './include/footer.php'?>  
    </div>

</body>
</html>