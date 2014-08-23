<?php
if($_GET['p']=='H' || $_GET['p']==""){
	require_once('home.php');
}
else if($_GET['p']=='E'){
	require_once('empresa.php');
}
else if($_GET['p']=='P'){
	require_once('produtos.php');
}
else if($_GET['p']=='S'){
	require_once('servicos.php');
}
else if($_GET['p']=='C'){
	require_once('contato.php');
}
else if($_GET['p']=='R'){
	require_once('recebe_contato.php');
}
?>
