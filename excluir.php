<?php
require __DIR__.'/vendor/autoload.php';

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
if(isset($_POST['excluir'])){
	$cidade->excluir();
	header('location: index.php');
	exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';