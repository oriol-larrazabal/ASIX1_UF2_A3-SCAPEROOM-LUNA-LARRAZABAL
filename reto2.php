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
<h1>POKÉMON QUIZZ</h1>
<br>
<br>
<p>Contesta de forma correcta estas preguntas. Si fallas, volverás a esta pantalla. Si aciertas todas, pasarás a la siguiente prueba.</p>
<br>
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
<label class="label">¿Qué tipo es débil al fuego?</label>
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

