<?php

include "conecta_banco.php";
// include "agenda.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agendamento</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
<p>
<?php

session_start();

if (isset($_SESSION["Usuario"]))
{
 echo $_SESSION["Usuario"];
 unset($_SESSION['Usuario']);
}

// session_destroy();
?>
</p>

<p>

<?php

?>

</p>

		<form action="agenda.php" method="POST" name="agend" class="agenda">
		<div class="caixa">
			<label>Laboratório</label>
		<select name="laboratorio">
		  <option value="Nenhum" name="laboratorio">Nenhum</option>
		  <option value="LAB1" name="laboratorio">Lab 1</option>
		  <option value="LAB2" name="laboratorio">Lab 2</option>
		  <option value="LAB3" name="laboratorio">Lab 3</option>
		  <option value="LAB4" name="laboratorio">Lab 4</option>
		</select>
		

<!-- <br>	
<br> -->
		<label>Equipamento</label>
		<select name = "equipamento">
		  <option value="Projetor" name = "equipamento">Projetor</option>
		  <option value="Mouse" name = "equipamento">Mouse</option>
		  <option value="Som" name = "equipamento">Caixa de Som</option>
		  <option value="Notebook" name = "equipamento">Notebook</option>
		</select>
<!-- <br>
<br> -->
		<label>Auditório</label>
		<select name = "auditorio">
		<option value="Nenhum" name = "auditorio">Nenhum</option>
		  <option value="Auditório 1"  name = "auditorio">Auditório 1</option>
		</select>
<!-- <br>
<br> -->

		<label>Dia</label>
		<select name="dia">
		  <option value="Segunda-Feira" name="dia">Segunda-Feira</option>
		  <option value="Terça-Feira"name="dia">Terça-Feira</option>
		  <option value="Quarta-Feira" name="dia">Quarta-Feira</option>
		  <option value="Quinta-Feira" name="dia">Quinta-Feira</option>
		  <option value="Sexta-Feira" name="dia">Sexta-Feira</option>
		</select>
<!-- <br>
<br> -->
		<label>Periodo:
	Tarde<input type="radio" name="periodo" value="Tarde">
	Noite<input type="radio" name="periodo" value="Noite"></label>

<br>
<br>
		<label>Hora:
		  <input type="radio" name="hora" value="13:30 - 15:35"> 13:30 - 15:35
		  <input type="radio" name="hora" value="16:00 - 18:00"> 16:00 - 18:00</label>
</div>


<input type="submit" name="" value="Agendar" class="buttons">
<?php
if (isset($_SESSION["Cadastro_Sucess"]))
{
 echo $_SESSION["Cadastro_Sucess"];
}

?>
<?php
if (isset($_SESSION["Error_Cadastro"]))
{
 echo $_SESSION["Error_Cadastro"];
}

session_destroy();
?>
</form>



<a href="agendado.php">
<input type="button" name="" value="Ver agenda" class="buttons">
</a>




<a href="logout.php">
<input type="submit" name="" value="Sair" class="sair">
</a>

</body>
</html>