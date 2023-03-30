<?php
$respuestas_correctas = array(
    "Planta",
    "16",
    "Pokéflauta",
    "Pikachu"
);

$respuestas_usuario = array(
        $_POST["preg1"],
        $_POST["preg2"],
        $_POST["preg3"],
        $_POST["preg4"]
);

    $correctas = 0;
    foreach ($respuestas_correctas as $key => $value) {
        if ($respuestas_usuario[$key] == $value) {
            $correctas++;
        }
    }

    if ($correctas == 4) {
        session_start();
        $_SESSION['nivel2'] = TRUE;
        header("Location: reto3.php");
        exit();
    } else {
        header("Location: reto2.php");
        exit();
    }
