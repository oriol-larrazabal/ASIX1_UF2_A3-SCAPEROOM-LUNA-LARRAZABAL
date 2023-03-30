<?php
session_start();
if (!isset ($_SESSION['nivel1'])) {
    header("Location:reto1.php");
    }
    elseif($_SESSION['nivel1']!= 'Jigglypuff'){
        header("Location:reto1.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href=./img/favicon.png>
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="stylesheet" href="./css/whoisthat.css" type="text/css">
    <title>POKÉMON QUIZZ</title>
</head>
<body>
<style>
        body{
        background-image: url('./img/fondo-pikachu.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        }
        #pikachu {
          position: absolute;
          top: 0;
          left: 0;
        }
        #bulbasaur {
          position: absolute;
          top: 0;
          left: 0;
        }
        #piplup {
          position: absolute;
          top: 0;
          left: 0;
        }
      </style>
<h1>POKÉMON QUIZZ</h1>
<br>
<br>
<p>Contesta de forma correcta estas preguntas. Si fallas, volverás a esta pantalla. Si aciertas todas, pasarás a la siguiente prueba.</p>
<br>
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
<audio id="myAudio2" preload="auto" loop>
    <source src="./player/Pokémon Rojo Fuego 🔥 y Pokémon Verde Hoja 🍃 Opening musica.mp3" type="audio/mpeg">
</audio>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        var audio = document.getElementById("myAudio2");
        audio.play();
    });
</script>
<form action="recibir2.php" method="POST">
<label class="label">¿Qué tipo es Bulbasaur?</label>
<input class="input" type='text' id='inp' name='preg1' placeholder='Fuego' required></input>
<br>
<br>
<label class="label">¿A qué nivel evoluciona Abra a Kadabra?</label>
<input class="input" type='text' id='inp' name='preg2' placeholder='0' required></input>
<br>
<br>
<label class="label">¿Con qué objeto despertamos a Snorlax?</label>
<input class="input" type='text' id='inp' name='preg3' placeholder='Regadera' required></input>
<br>
<br>
<label class="label">¿Quién es el mejor amigo de Ash?</label>
<input class="input" type='text' id='inp' name='preg4' placeholder='Brock' required></input>
<br>
<br>
<button class="btn" type="submit">ENVIAR MIS RESPUESTAS A OAK</button>
</form>
</body>
</html>

