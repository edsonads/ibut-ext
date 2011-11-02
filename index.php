<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));

include_once 'IbutExt.php';
IbutExt::setExtBaseUrl(BASE_URL);

$a=new EXT_Tag_Imagem();
$a->setUrl('recursos/img/ibutext.png');
$a->show();

?>

