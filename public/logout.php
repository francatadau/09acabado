<?php
@session_start();
session_destroy();
//Una vez cerramos sesion vamos a index.php
header("Location: index.php");
?>
