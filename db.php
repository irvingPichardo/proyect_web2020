<?php

session_start();

$conn = mysqli_connect(
    'localhost', 'root', 'root', 'diccionarioVirtual'
);

if(isset($conn)){
    echo "Base de datos conectada... 😎";
}

?>

<?php
//SESIONES
if (isset($_SESSION['cont'])) {
    $_SESSION['cont'] = $_SESSION['cont'] + 1;
    $sesion = '**Número de visitas: ' . $_SESSION['cont'] . ' 🤨 ';
    echo $sesion;
} else {
    $_SESSION['cont'] = 1;
    $sesion = 'Bienvenido 1';
    echo $sesion;
}
?>

<?php
//COOKIES
if (isset($_COOKIE['cont'])) {
    setcookie('cont', $_COOKIE['cont'] + 1, time() + 365 * 24 * 60 * 60);
    $cook = '**Has visitado la página: ' . $_COOKIE['cont'] . ' veces... ❗️';
    echo $cook;
} else {
    setcookie('cont', 1, time() + 365 * 24 * 60 * 60);
    $cook = 'Bienvenido 2';
    echo    $cook;
}
?>

