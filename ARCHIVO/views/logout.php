<?php 
require_once("../config/conecxion.php");
session_destroy();
header("Location:".Conectar::ruta()."ARCHIVO/views/login.php");
exit();
?>