<?php
require realpath($_SERVER["DOCUMENT_ROOT"])."\\vendor\\autoload.php";

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
	header('location: /index.php');
	exit;
}

include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\header.php";
include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\confirmar-exclusao.php";
include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\footer.php";
