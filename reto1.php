<?php
if (isset($_POST['USER'])) {
    session_start();
    $_SESSION['Login'] = $_POST['USER'];
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
<style>
        body{
        background-image: url('./img/fondo-bulbasaur.jpeg');
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
    <?php if (isset($_SESSION['Login'])) : ?>
        <p>Hola entrenador. Si quieres pasar de pantalla debes acertar cuál es el Pokémon que se esconde. Suerte <?php echo $_SESSION['Login']; ?></p>
    <?php endif; ?>
    </br>
    </br>
    <audio id="myAudio2" preload="auto" loop>
        <source src="./player/Pokémon Rojo Fuego 🔥 y Pokémon Verde Hoja 🍃 Opening musica.mp3" type="audio/mpeg">
    </audio>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var audio = document.getElementById("myAudio2");
            audio.play();
        });
    </script>
    <img class="acierta" src="./img/whoisthatJigglypuff.jpg">
    </br>
    </br>
    <form action="recibir.php" method="POST">
        <label class="label">Who is that Pokémon?</label>
        <input class="input" type='text' id='inp' name='pkm1' placeholder='Pokémon' required></input>
        <br>
        <button class="btn" type="submit">ENVIAR MIS RESPUESTAS A OAK</button>
    </form>
</body>
</html>