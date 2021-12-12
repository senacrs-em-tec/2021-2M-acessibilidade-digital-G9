<?php
// variaveis do banco de dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'meusite';

// cria a conexao com o banco de dados
$conexao = mysqli_connect($servidor , $usuario , $senha , $db);

// verificia se houve algum erro na conexao com o banco de dados
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>