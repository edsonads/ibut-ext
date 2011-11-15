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

class EXT_Widget_Painel {

    private $painel;
    private $painelTitulo;
    private $painelCorpo;
    private $painelRodape;

    public function __construct($id) {
        $this->painel=new EXT_Tag_Div();
        $this->painel->setId($id);
        
        $this->painelTitulo = new EXT_Tag_Div();
        $this->painelCorpo = new EXT_Tag_Div();
        $this->painelRodape = new EXT_Tag_Div();
    }

    public function setTitulo($conteudo) {
        $this->painelTitulo->add($conteudo);
    }

    public function setTituloBg($url, $repetir=true) {
        $css = new EXT_Css_Regra('#', $this->painel->getAtributo('id'));
        $css->background_image = EXT_Utils::retornaUrl($url) ;
        $css->width = '100%';
        $css->heigth = '100%';

        if ($repetir) {
            $css->background_repeat = 'repeat-x';
        }
        EXT_Tag_Style::addRegra($css);
        
    }

    public function show() {
        $this->painel->add($this->painelTitulo);
        $this->painel->show();
   }

}

?>
