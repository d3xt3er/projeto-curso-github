<?php

include "conecta_banco.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>WebSite - Agendamento</title>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
<div class="content">
  <a href="index.php">
  <p class="link">Login</p>
  </a>
</div>

<form class="box" action="valida_login.php" method="POST">
  <h1>Login</h1>
  <input type="text" name="nome" placeholder="Nome">
  <input type="password" name="senha" placeholder="Senha">
  <input type="submit" name="" value="Login">
<p style="color: #fff;">
<?php
session_start();

if(isset($_SESSION['loginErro']))
{
echo $_SESSION['loginErro'];
  unset($_SESSION['loginErro']);
}
?>

<?php
if(isset($_SESSION['Deslogado']))
{
echo $_SESSION['Deslogado'];
unset($_SESSION['Deslogado']);
}
session_destroy();
?>
</p>
</form>

<div class="footer">
  <p>Copyright@Etec - 2019</p>
</div>

</body>
</html>