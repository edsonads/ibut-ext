<?php
/*
 * ibut-ext
 * https://github.com/mardonedias/ibut-ext
 * Copyright 2011 Mardone Dias
 *
 * Este arquivo é parte da biblioteca ibut-ext
 *
 * ibut-ext é um software livre; você pode redistribui-lo e/ou
 * modifica-lo dentro dos termos da Licença Pública Geral GNU como
 * publicada pela Fundação do Software Livre (FSF); na versão 3 da
 * Licença, ou (na sua opnião) qualquer versão.
 *
 * Esta biblioteca é distribuida na esperança que possa ser  util,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, acesse http://www.gnu.org/copyleft/gpl.txt
 */



class EXT_Template_Simples extends EXT_Template_Base {

    public function __construct() {
        parent::__construct();

        $this->addCss('recursos/css/ibutext-all.css');
        $this->setCodificacao('UTF-8');
        $this->addFavIcon(IbutExt::getExtBaseCss() . 'icone.ico');
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    }
    

    public function show() {
        parent::show();
    }

}

?>
