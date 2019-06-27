<?php

session_start();	

// --- INCLUINDO O BANCO --- //
include "conecta_banco.php";
// --- FIM INCLUINDO O BANCO --- //

if((isset($_POST['nome'])) && (isset($_POST['senha'])))
{
	$usuario = mysqli_real_escape_string($conexao,$_POST["nome"]);
	$senha = mysqli_real_escape_string($conexao,$_POST["senha"]);
}

// --- CONECTANDO COM O BANCO E FAZENDO SELECT NA TABELA --- //
$res = $conexao->query("SELECT cd_usuario FROM tb_usuario WHERE nm_usuario = '$usuario' AND senha = '$senha'");

// --- FIM CONECTANDO COM O BANCO E FAZENDO SELECT NA TABELA --- //

$row = mysqli_num_rows($res);
 
if($row == 0)
{
 $_SESSION['loginErro'] = "Usuário ou senha Inválido!";
 header("Location: index.php");
}

else
{
  // $id = mysql_result($res, 0, "id");
  // $nome = mysql_result($res, 0, "nome");
  $_SESSION['User'] = $row['nome'];
  $_SESSION['id'] = $row['cd_usuario'];
  $_SESSION["Usuario"] = "<p align='center'>Bem-Vindo Professor! $usuario</p>";
  header("Location: agendamento.php");
}
 

// --- FECHANDO A CONEXÃO COM O BANCO DE DADOS --- //
$conexao->close();
// --- FIM FECHANDO A CONEXÃO COM O BANCO DE DADOS --- //

?>
