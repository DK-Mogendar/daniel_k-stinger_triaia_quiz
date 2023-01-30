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

    <div class="container-felx d-flex justify-content-center text-white bg-primary"> 
    <h1>Hallo Welt</h1>
    <p>Hallo wir starten mit Datenbanken mysql und PHP und PDO!</p>
    </div>
    <form class="px-4" action="index.php?seite=question9" method="POST">
          <h3>Quiz Auswahl</h3>
          <!--input-groupmit Numerischem eingabefeld Frage 6-->
          <label for="vegetables">
           Wähle eine Kategory
          </label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Schwierigkeitsgrad</span>
            </div>
            <input type="number" name="schwer" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default" required>
          </div>
       
        </form>

  
    <div class="footer container"><!--footer Start-->
          <?php include './include/footer.php'?>  
    </div><!--footer Ende-->
</body>
</html>