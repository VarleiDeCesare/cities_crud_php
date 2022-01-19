<?php
require realpath($_SERVER["DOCUMENT_ROOT"])."\\vendor\\autoload.php";

use \App\Entity\Cidade;

define('TITLE', 'Cadastrar Cidade');
define('TITLE_BUTTON', 'Cadastrar');

$cidade = New Cidade;

if(isset($_POST['name'])){
	$cidade->name = $_POST['name'];
	$cidade->uf = $_POST['uf'];
	$cidade->cadastrar();
	header("location: \index.php?status=success");
	exit;
}


include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\header.php";
include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\formulario.php";
include realpath($_SERVER["DOCUMENT_ROOT"])."\\includes\\footer.php";
