<?php
session_start();
if (!isset ($_SESSION['nivel5'])) {
    header("Location:reto5.php");
    }
    elseif($_SESSION['nivel5']!=TRUE
){
    header("Location:reto5.php");
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
    <link rel="stylesheet" href="./css/whoisthat.css" type="text/css">
    <title>POKÉMON QUIZZ</title>
</head>
<body>
<h1>POKÉMON QUIZZ</h1>
<br>
<p>Entrenador esta es tu última prueba. Necesito que resuelvas este problema matemático.</p>
</br>
<img id="acierta" class="acierta" src="./img/acertijo.jpg">
<br>
<br>
<audio id="myAudio2" preload="auto" loop>
    <source src="./player/Pokémon Rojo Fuego 🔥' y Pokémon Verde Hoja 🍃 Opening musica.mp3" type="audio/mpeg">
</audio>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        var audio = document.getElementById("myAudio2");
        audio.play();
    });
</script>
<form action='recibir5.php' method="POST">
<label class="label">¿Qué valor tiene Pikachu?</label>
<input class="input" type='text' id='inp' name='valor1' placeholder='0' required></input>
<br>
<br>
<label class="label">¿Qué valor tiene Ash?</label>
<input class="input" type='text' id='inp' name='valor2' placeholder='0' required></input>
<br>
<br>
<button class="btn" type="submit">ENVIAR MIS RESPUESTAS A OAK</button>
</form>