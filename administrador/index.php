<?php
include("plantillas/head.php");
session_start();

if(!$_SESSION['PERMISO'] == TRUE){
    header('location: login.php');
}
?>


<?php
include("plantillas/footer.php");

?>