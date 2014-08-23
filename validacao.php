<?php
$menu= array('H','E','P','S','C','R');

if(in_array($_GET['p'],$menu)==false && $_GET['p']!=""){
	exit(utf8_decode('Página não identificada!'));
}
