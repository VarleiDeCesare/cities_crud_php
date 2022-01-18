<?php
require __DIR__.'/vendor/autoload.php';
use \App\Entity\Cidade;
define('TITLE', 'Cadastrar Cidade');
define('TITLE_BUTTON', 'Cadastrar');

$cidade = New Cidade;

if(isset($_POST['name'],$_POST['uf'])){

	$cidade->name = $_POST['name'];
	$cidade->uf = $_POST['uf'];
	$cidade->cadastrar();

	header("location: index.php?status=success");
	exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';