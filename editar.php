<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar Cidade');
define('TITLE_BUTTON', 'Editar');

use \App\Entity\Cidade;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
	header("location: index.php");
	exit();
}
$cidade = Cidade::getCidade($_GET['id']);
if(!$cidade instanceof Cidade){
	header("location: index.php");
	exit();
}

if(isset($_POST['name'],$_POST['uf'])){
	$cidade->name = $_POST['name'];
	$cidade->uf = $_POST['uf'];
	$cidade->atualizar();

	header("location: index.php?status=success");
	exit();
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';