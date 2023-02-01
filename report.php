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
    <div class="container-flex"><!--header start--> 
         <?php include './include/header.php' ?>   
    </div><!--header ende-->

    <div>
        <h1>Ende der Umfrage</h1>
        <p>Mal sehen wie gut du bist</p>
    </div>
 
      
    <div class="container-flex"><!--footer Start-->
          <?php include './include/footer.php'?>  
    </div><!--footer Ende-->
</body>
</html>