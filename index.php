<?php

include_once 'IbutExt.php';
define('BASE_URL', 'http://localhost/ibutfw');

$div=new EXT_Tag_Div();
$div->add("Conteúdo da div");
$div->addEstilo("background-color", "green");
$div->addEstilo("width", "200px");
$div->addEstilo("height", "200px");
$div->show();



?>


