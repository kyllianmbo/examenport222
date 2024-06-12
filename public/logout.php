<?php
// Start de sessie
session_start();

// Unset alle sessievariabelen
$_SESSION = array();

// Vernietig de sessie
session_destroy();

// Doorsturen naar de index pagina
header("Location: index.php");
exit();
?>
