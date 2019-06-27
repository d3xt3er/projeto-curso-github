<?php

session_start();
	
unset($_SESSION['User']);

$_SESSION['Deslogado'] = "Deslogado com sucesso!";

header("Location: index.php");

?>