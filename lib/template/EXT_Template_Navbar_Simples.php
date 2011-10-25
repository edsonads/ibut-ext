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


class EXT_Template_Navbar_Simples extends EXT_Tag_Div {
    const ATIVO=true;
    const INATIVO=false;

    private $listaNav;
    private $cont = 0;

    public function __construct($botoes, $nome, $arredondado=true) {
        parent::__construct();

        $this->setId('navbar-simples');
        $this->listaNav = new EXT_Tag_Lista(EXT_Tag_Lista::LISTA_NAO_ORDENADA);

        if ($arredondado) {
            $this->listaNav->setClasse('arredondado');
        }

        foreach ($botoes as $href => $texto) {
            if ($texto == $nome) {
                $this->addBotao($href, $texto, $arredondado, true);
            } else {
                $this->addBotao($href, $texto, $arredondado, false);
            }
            $this->cont .=1;
        }
    }

    private function addBotao($endereco, $texto, $arredondado, $ativo=NavBar::INATIVO) {
        $btn = new EXT_Tag_Div();
        $btnInicio = new EXT_Tag_Span();
        $link = new EXT_Tag_Hiperlink($endereco, $texto);

        if ($ativo) {
            if ($arredondado && $this->cont == 0) {
                $btn->setClasse('btn-ativo-arredondado');
            } else {
                $btn->setClasse('btn-ativo');
            }
        }

        if ($this->cont == 0) {
            $btnInicio->setClasse('inicio');
            $btnInicio->add($link);
            $btn->add($btnInicio);
        } else {
            $btn->add($link);
        }

        $this->listaNav->addItem($btn);

        $separador = new EXT_Tag_Div();
        $separador->setClasse('separador');
        $this->listaNav->addItem($separador);
    }

    public function show() {
        $this->add($this->listaNav);
        parent::show();
    }

}

?>