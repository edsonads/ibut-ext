<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));

include_once 'IbutExt.php';
IbutExt::setExtBaseUrl(BASE_URL);


$bar=new EXT_Widget_LinkBar();
$bar->addLink("index.php", 'Página Index');
$bar->addLink("http://www.google.com.br", 'Página Index',true);

$ts=new EXT_Template_Simples();
$ts->add("Links");
$ts->add($bar);
$ts->show();

$div=new EXT_Tag_Div();
$div->setId('ttt');
$div->show();

?>


