<?php

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
IbutExt::importar('tag.EXT_Tag_Lista');
IbutExt::importar('tag.EXT_Tag_Paragrafo');
IbutExt::importar('tag.EXT_Tag_Script');
IbutExt::importar('tag.EXT_Tag_Span');
IbutExt::importar('tag.EXT_Tag_Style');
IbutExt::importar('tag.EXT_Tag_Select');
IbutExt::importar('tag.EXT_Tag_Tabela');


/* CSS */
IbutExt::importar('css.EXT_Css_Regra');

/*Layout*/
IbutExt::importar('layout.EXT_Layout_FormHorizontal');


/* TEMPLATE */
IbutExt::importar('template.EXT_Template_Base');
IbutExt::importar('template.EXT_Template_Mapa');
IbutExt::importar('template.EXT_Template_Simples');
IbutExt::importar('template.EXT_Template_Navbar_Simples');
IbutExt::importar('template.EXT_Template_Admin');

/* WIDGET */
IbutExt::importar('widget.EXT_Widget_LinkBar');


/**
 * Essa classe é responsável pelo carregamento dos objetos da biblioteca.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext
 */
class IbutExt {

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
        }else{
            $caminho .= $classe . '.php';
        }
        include_once $caminho;
    }

}

?>
