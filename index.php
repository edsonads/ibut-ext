<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));
include_once 'IbutExt.php';
IbutExt::setExtBaseUrl(BASE_URL);

//Include
include_once 'exemplos/EXT_Template_Simples.php';



$p=new EXT_Widget_Painel('aaa');
$p->setTitulo('sfd');
$p->setTituloBg('a', 'recursos/img/ibut-ext.png');
$p->setTituloBg('a', 'recursos/img/ibut-ext.png');

$t=new EXT_Template_Simples();
$t->add($p);
$t->show();



?>

