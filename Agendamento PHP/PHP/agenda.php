<?php

session_start();

include "conecta_banco.php";

// $agenda = array();

// // $nome = $_POST['nome'];
// // $laboratorio = $_POST['laboratorio'];
// $agenda['equipamento'] = $_POST['equipamento'];
// // $auditorio = $_POST['auditorio'];
// $agenda['dia'] = $_POST['dia'];
// $agenda['periodo'] =  $_POST['periodo'];
// $agenda['hora'] =  $_POST['hora'];

$laboratorio = $_POST['laboratorio'];
$auditorio = $_POST['auditorio'];
$equipamento = $_POST['equipamento'];
$dia = $_POST['dia'];
$periodo = $_POST['periodo'];
$horario = $_POST['hora'];



if(isset($_POST['laboratorio']))
{
$_SESSION['Cadastro_Sucess'] = "Cadastrado com Sucesso!";
header("Location: agendamento.php");
}

else
{
$_SESSION['Error_Cadastro'] = "Cadastro Falhou!";
header("Location: agendamento.php");
exit;
}

// --- INSERINDO OS VALORES NA TABELA 'DIARIO' DO BANCO DE DADOS --- //
$comandoSQL = "INSERT INTO agendado (laboratorio,equipamento,auditorio, dia, periodo,hora) VALUES ( '$laboratorio'
'$equipamento','$auditorio', '$dia','$periodo','$hora')";
// --- FIM INSERINDO OS VALORES NA TABELA 'DIARIO' DO BANCO DE DADOS --- //

// --- FAZENDO A CONEXÃO COM O BANCO COM A FUNÇÃO 'QUERY' --- //  
$res = $conexao->query($comandoSQL) or die ("ERRO");
// --- FIM FAZENDO A CONEXÃO COM O BANCO COM A FUNÇÃO 'QUERY' --- //  


// --- FECHANDO A CONEXÃO COM O BANCO DE DADOS --- //
$conexao->close();
// --- FIM FECHANDO A CONEXÃO COM O BANCO DE DADOS --- //

// --- EXEMPLO DE FOR --- //
// for ($i=0; $i < 10; $i++) {
//     echo $i."<br>";
// }

// $_SESSION['lista_agendas'][] = $agenda;


?>
