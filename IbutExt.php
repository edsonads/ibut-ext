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
 */

/**
 * Importar todas as classes da biblioteca que disponibilizam serviços.
 */
IbutExt::importar('EXT_Utils');

/* BASE */
IbutExt::importar('base.EXT_Base_ElementCss');
IbutExt::importar('base.EXT_Base_Tag');

/* TAG */
IbutExt::importar('tag.EXT_Tag_Div');
IbutExt::importar('tag.EXT_Tag_Form');
IbutExt::importar('tag.EXT_Tag_Hiperlink');
IbutExt::importar('tag.EXT_Tag_H');
IbutExt::importar('tag.EXT_Tag_Imagem');
IbutExt::importar('tag.Ext_Tag_Input');
IbutExt::importar('tag.EXT_Tag_Label');
IbutExt::importar('tag.EXT_Tag_Link');
IbutExt::importar('tag.EXT_Tag_Lista');
IbutExt::importar('tag.EXT_Tag_Meta');
IbutExt::importar('tag.EXT_Tag_Paragrafo');
IbutExt::importar('tag.EXT_Tag_Script');
IbutExt::importar('tag.EXT_Tag_Span');
IbutExt::importar('tag.EXT_Tag_Style');
IbutExt::importar('tag.EXT_Tag_Select');
IbutExt::importar('tag.EXT_Tag_Tabela');
IbutExt::importar('tag.EXT_Tag_Tag');

/* CSS */
IbutExt::importar('css.EXT_Css_Regra');

/* Layout */
IbutExt::importar('layout.EXT_Layout_FormHorizontal');

/* TEMPLATE */
IbutExt::importar('template.EXT_Template_Base');
IbutExt::importar('template.EXT_Template_Mapa');

/* WIDGET */
IbutExt::importar('widget.EXT_Widget_LinkBar');

/*EXEMPLOS*/
IbutExt::importar('exemplos.EXT_Template_Simples');


/**
 * Essa classe é responsável pelo carregamento dos objetos da biblioteca.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext
 */
class IbutExt {

    private static $ExtBaseUrl;
    private static $ExtBaseImg;
    private static $ExtBaseCss;

    /**
     * Usado para incluir uma classe permitindo acesso a seus métodos. 
     * @method importar()
     * @param $classe - Pacotes e nome da classe separados por ponto, Ex.: pacote.Classe
     */
    public static function importar($classe) {
        $parts = explode(".", $classe);
        $caminho = 'lib/';

        if (count($parts) > 0) {
            for ($i = 0; $i < count($parts); $i++) {
                if ($i < (count($parts) - 1)) {
                    $caminho.= $parts[$i] . '/';
                } else {
                    $caminho.= $parts[$i] . '.php';
                }
            }
        } else {
            $caminho .= $classe . '.php';
        }
        include_once $caminho;
    }

    public static function setExtBaseUrl($baseUrl) {
            self::$ExtBaseUrl = $baseUrl . '/';
    }

    public static function getExtBaseUrl() {
        return self::$ExtBaseUrl;
    }

    public static function getExtBaseImg() {
        return self::$ExtBaseUrl . 'lib/ibut-ext/recursos/img/';
    }

    public static function getExtBaseCss() {
        return self::$ExtBaseUrl . 'lib/ibut-ext/recursos/css/';
    }

}
?>
