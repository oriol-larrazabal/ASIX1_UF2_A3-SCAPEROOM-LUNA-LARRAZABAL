<?php
session_start();

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

if ($valor1 == 15 && $valor2 == 13) {
    $_SESSION['nivel6'] = true;
    header("Location: congratulations.php");
    exit();
} else {
    header("Location: reto6.php");
    exit();
}
?>

