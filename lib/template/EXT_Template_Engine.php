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

abstract class EXT_Template_Engine {

    private $largura;
    private $container;
    private $top;
    private $nav;
    private $map;
    private $content;
    private $auxMenu;
    private $mainContent;
    private $footer;

    public function __construct() {
        $this->container = new EXT_Tag_Div();
        $this->container->setId('iextfw-container');

        $this->top = new EXT_Tag_Div();
        $this->top->setId('iextfw-top');

        $this->nav = new EXT_Tag_Div();
        $this->nav->setId('iextfw-nav');

        $this->map = new EXT_Tag_Div();
        $this->map->setId('iextfw-map');

        $this->content = new EXT_Tag_Div();
        $this->content->setId('iextfw-content');

        $this->mainContent = new EXT_Tag_Div();
        $this->mainContent->setId('iextfw-maincontent');

        $this->footer = new EXT_Tag_Div();
        $this->footer->setId('iextfw-footer');
    }
    
    public function setLargura($largura) {
        $this->largura=$largura;
    }

    public function setMenuAuxliar($largura) {
        $this->auxMenu = new EXT_Tag_Div();
        $this->auxMenu->setId('iextfw-auxmenu');
        $this->auxMenu->setAtributo('width', $largura);
        $this->mainContent->setAtributo('width', ( $largura - $this->auxMenuLargura) . 'px');
    }

    public function setTipo($tipo, $largura=1004) {
        if ($tipo == 'fixo') {
            $this->container->setAtributo('width', $largura);
        } else if ($tipo = 'liquido') {
            EXT_Tag_Script::addScript("
            var largura= $(window).width();
            $('#iextfw-container').css('width', largura-20);            
        ");
        }
    }

    public function show() {
        $this->content->add($this->auxMenu);

        $this->template->show();
    }

}

?>