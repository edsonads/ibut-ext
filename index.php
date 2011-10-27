<?php
define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));

include_once 'IbutExt.php';
IbutExt::setExtBaseUrl(BASE_URL);

$h=new EXT_Tag_H(1);
$h->addEstilos(array('color'=>'red','background'=>'blue'));
$h->add('Título 1');
$h->show();
?>


