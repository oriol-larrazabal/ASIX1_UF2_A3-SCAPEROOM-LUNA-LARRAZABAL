<?php
session_start();

if (!isset($_SESSION['nivel6']) || $_SESSION['nivel6'] !== true) {
    header("Location: reto6.php");
    exit();
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
</br>
</br>
<style>
body{
        background-image: url('./img/fondo-12.webp');
        background-repeat: no-repeat;
        background-size: cover;
        }
</style>
<p>Enhorabuena! Has conseguido completar el Quizz. Eres un gran entrenador.</p>
<img id="pikachu" src="./img/pikachu.png" alt="Pikachu" width="100" height="100">
<img id="bulbasaur" src="./img/bulbasur.png" alt="Bulbasaur" width="100" height="100">
<img id="piplup" src="./img/piplup.png" alt="Piplup" width="100" height="100">
<script>
  var pokemon = document.getElementById('pikachu');
  var bulbasaur = document.getElementById('bulbasaur');
  var piplup = document.getElementById('piplup');
  var interval = setInterval(movePokemon, 1000);
  var interval2 = setInterval(moveBulbasaur, 1000);
  var interval3 = setInterval(movePiplup, 1000);

  function movePokemon() {
    var x = Math.floor(Math.random() * window.innerWidth);
    var y = Math.floor(Math.random() * window.innerHeight);
    pokemon.style.top = y + 'px';
    pokemon.style.left = x + 'px';
  }

  function moveBulbasaur() {
    var x = Math.floor(Math.random() * window.innerWidth);
    var y = Math.floor(Math.random() * window.innerHeight);
    bulbasaur.style.top = y + 'px';
    bulbasaur.style.left = x + 'px';
  }
  function movePiplup() {
    var x = Math.floor(Math.random() * window.innerWidth);
    var y = Math.floor(Math.random() * window.innerHeight);
    piplup.style.top = y + 'px';
    piplup.style.left = x + 'px';
  }
</script>
<img class="acierta" src='./img/oak.png'>
</br>
</br>
<audio id="myAudio3" preload="auto" loop>
    <source src="./player/Congratulations on Entering the Hall of Fame! - Pokémon Brilliant Diamond Shining Pearl (Gamerip).mp3" type="audio/mpeg">
</audio>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        var audio = document.getElementById("myAudio3");
        audio.play();
    });
</script>
<p>Hecho por Iker Luna y Oriol Larrazábal. Esperamos que os haya gustado!</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://dl.dropboxusercontent.com/s/qhmfmwu7ckig9l2/fartificiales.js"></script>
</body>