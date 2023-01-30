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
    $id = 9999;
    $question = fetchQuestionsById($id, $dbConnection);
   
 ?> 
    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>   
    </div><!--header ende-->

    <div class="footer container"><!--include db-->

    </div>

    <div class="container justify-content-center text-white bg-primary mt-100px"> 
        <h1>Questions</h1>
        <br>
        <p><?php echo   $question['question_text'];?></p>
    </div>

    <div class="container justify-content-center text-white">
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
    </div>
      
    <div class="container-flex"><!--footer Start-->
          <?php include './include/footer2.php'?>  
    </div><!--footer Ende-->
</body>
</html>