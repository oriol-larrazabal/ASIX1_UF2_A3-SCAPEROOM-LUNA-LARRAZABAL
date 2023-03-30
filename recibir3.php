<?php
$pkm2 = $_POST['pkm2'];
if ($pkm2 == 'Pikachu') {
    session_start();
    $_SESSION['nivel4'] = true;
    header("Location: reto5.php");
    exit();
} else {
    header("Location: reto4.php");
    exit();
}
