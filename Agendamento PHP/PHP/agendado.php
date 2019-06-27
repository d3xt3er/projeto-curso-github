<?php
include "conecta_banco.php";

session_start();

// $res = $conexao->query("SELECT * FROM tb_usuario WHERE nm_usuario = '$usuario' AND senha = '$senha'");


// if (isset($_SESSION['id'])) 
// {
//   $dado = $_SESSION['id'];
// }

// --- FAZENDO SELECT NA TABELA 'DIARIO' DO BANCO DE DADOS --- //
// $sql = "SELECT * FROM agendado WHERE id = '$dado'";
// // --- FIM FAZENDO SELECT NA TABELA 'DIARIO' DO BANCO DE DADOS --- //

// // --- FAZENDO A CONEXÃO NO BANCO COM A FUNÇÃO 'QUERY' --- //
// $resultado = $conexao->query($sql) or die ("ERRO");
// // --- FIM FAZENDO A CONEXÃO NO BANCO COM A FUNÇÃO 'QUERY' --- //

// $conexao->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agendados</title>
</head>
<body>
<table>
	<tr>
		<th>Laboratório</th>
		<th>Equipamento</th>
		<th>Auditório</th>
		<th>Dia</th>
		<th>Período</th>
		<th>Hora</th>
	</tr>
	<?php foreach($resultado as $tarefa): ?>
		<tr>
			<td><?php echo $tarefa['laboratorio'];?></td>
			<td><?php echo $tarefa['equipamento'];?></td>
			<td><?php echo $tarefa['auditorio'];?></td>
			<td><?php echo $tarefa['dia'];?></td>
			<td><?php echo $tarefa['periodo'];?></td>
			<td><?php echo $tarefa['hora'];?></td>
		</tr>
	<?php endforeach; ?>
</table>

</body>
</html>