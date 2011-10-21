<?php

/**
 * Inclui a classe abstrata Tag a página.
 * @static
 */
//IbutExt::importar('base.EXT_Base_Tag');

/**
 * Classe para manipulação do elemento <div>; <br/>
 * Define uma divisão ou uma seção em um documento HTML. <br/>
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.tag
 */
class EXT_Tag_Imagem extends EXT_Base_Tag {

    public function __construct() {
        parent::__construct('IMG');
        parent::eUnica(true, false);
        
    }
    
    
    public function setEndereco($endereco){
        $this->src=$endereco;
    }

    public function setAlt($alt){
        $this->alt=$alt;
    }

    public function setTitulo($titulo){
        $this->title=$titulo;
    }
    
}

?>
