<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));

include_once 'IbutExt.php';


IbutExt::setExtBaseUrl(BASE_URL);

$a=new EXT_Tag_Imagem();
$a->setUrl('recursos/img/ibut-ext.png');
$a->show();


$container=new EXT_Layout_FormHorizontal();
$container->addLinha();
$container->addColuna(new EXT_Tag_Input('txtNome', EXT_Tag_Input::CAMPO, 'Digite seu nome!'),'Nome: ');

$form=new EXT_Tag_Form('frmCliente');
$form->add($container);

EXT_Tag_Script::addScript('$_script teste');


$tem=new EXT_Template_Simples();
$tem->setTitulo('Página de Exemplos');
$tem->add($form);
$tem->show();



?>

