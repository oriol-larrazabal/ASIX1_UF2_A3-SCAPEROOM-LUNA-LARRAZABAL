<?php
session_start();
if (!isset ($_SESSION['nivel2'])) {
    header("Location:reto2.php");
    }
    elseif($_SESSION['nivel2']!= TRUE){
        header("Location:reto2.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/favicon.png">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="stylesheet" href="./css/memorycss.css" type="text/css">
    <title>POKÉMON QUIZZ</title>
</head>
<body>
    <style>
        body{
        background-image: url('./img/fondo-slowbro.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
    <div class="container">
        <header>
            <h1>POKÉMON QUIZZ</h1>
            <p>Completa este increíble memory</p>
        </header>
        <div id="game">    
        </div>
    </div>
    <script src="memory.js"></script>
    <button onclick="resetGame()">Reset</button>
    <button onclick="nextGame()">Siguiente Reto</button>
</body>
</html>
