<?php
session_start();
include'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-5">
                <h3>
                    GENERATED PSW:
                </h3>
            </div>
            <div class="col-5">
                <h3 id="psw">
                    <?php  
                        echo $password;
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
          <button>
                <a href="./index.php">
                    Torna alla pagina precedente
                </a>
          </button>
        </div>
    </div>
</body>
</html>