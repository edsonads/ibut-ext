<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));
include_once 'IbutExt.php';
IbutExt::setExtBaseUrl(BASE_URL);

//Include
include_once 'exemplos/EXT_Template_Simples.php';

$estilos=new EXT_Css_Regra('#', 'teste');
$estilos->background_color='red';
$estilos->color='white';
$estilos->height='200px';
$estilos->width='200px';

EXT_Tag_Style::addRegra($estilos);

$camada=new EXT_Tag_Div();
$camada->add('Camada exemplo');
$camada->setId('teste');
        
$t=new EXT_Template_Simples();
$t->add($camada);
$t->show();

//sada

?>

