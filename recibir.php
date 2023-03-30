<?php
$pkm1=$_POST['pkm1'];
if ($pkm1 == 'Jigglypuff') {
    session_start();
    $_SESSION['nivel1']=true;
    header("Location:reto2.php");
}
else {
    header("Location:reto1.php");
}