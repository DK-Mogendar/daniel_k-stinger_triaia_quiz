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
    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>   
      
    </div><!--header ende-->



 <div style="padding: 20px;">
 <form id="quiz-topic" action="question.php" method="post" onsubmit="return navigate('next');"> 
    <!--Themenauswahl-->
    <label for="quiz-topic" class="="form-label>Quiz Thema - bitte auswählen</label>
    <select style="width: 400px;" class="form-select" aria-label="Default select exemple" id="topic" name="topic">
        <option values="geography">Geography</option>
        <option values="animals">Animals</option>
        <option values="movies">Movies</option>
    </select>

    <!--Anzahl Fragen-->



    <label style="margin-top:20px;" for="questionNum" class="form-label">Number of Question</label>      
    <input style="width:100px" type="number" class="form-control" id="questionNum" name="questionNum" min="5" max="40" value="10">
      <!--
        input type="hidden"
        lastQuestionIndex: mit PHP gesetzt
        indexStep: mit JavaScript setValue.......
      -->
    <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
    <input type="hidden" id="indexStep" name="indexStep" value="1">

    <p id=" validation-warning" class="warnig"></p>

    
    <!--submitbutton-->
    <button type="submit" class="btn btn-primary">Start</button>
</form>

    <!-- <div class="footer container">    footer Start-->
          <?php //include './include/footer.php'?>  
    </div><!--footer Ende-->
</body>
</html>