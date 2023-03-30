<?php
$preg1 = $_POST['preg1'];
$preg2 = $_POST['preg2'];
$preg3 = $_POST['preg3'];
$preg4 = $_POST['preg4'];

$respuestas_correctas = array(
    "Fuego",
    "Revestimiento metálico",
    "8",
    "3"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $_SESSION['nivel5'] = true;
        header("Location: reto6.php");
        exit();
    } else {
        header("Location: reto5.php");
        exit();
    }
}
