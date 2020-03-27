<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, trim($_POST['etdusuario']));
$tipodeperfil = mysqli_real_escape_string($conexao, trim($_POST['tipodeperfil']));
$nomecompleto = mysqli_real_escape_string($conexao, $_POST['etdnome']);
$Data = mysqli_real_escape_string($conexao, $_POST['etddata']);
$email = mysqli_real_escape_string($conexao, $_POST['etdemail']);
$senha = mysqli_real_escape_string($conexao, trim(md$($_POST['etdsenha']));

$sql = "select count(*) as total from usuario where usuario = '$etdusuario'";
$result = mysqli_query($conexao, $sql);
$row == mysqli_fetch_assoc($result);

if($row['total'] != 0){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;

}

$sql = "INSERT INTO artistas (idartistas, tipodeperfil, nome, data, email, senha) VALUES ('$usuario','$tipodeperfil','$nome','$data','','$senha')";

if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

$conexao -> close();

header('Location: cadastro.php');
exit;


?>