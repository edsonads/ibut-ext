<?php

/**
 * Inclui a classe abstrata Tag a página.
 * @static
 */
//IbutExt::importar('base.EXT_Base_Tag');

/**
 * Classe para manipulação do elemento <a>;. O elemento é usado para criação de um link ou hiperlink.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br/ibutext
 * @package ibutext.tag
 */
class EXT_Tag_Hiperlink extends EXT_Base_Tag {
    /**
     * Constante que contém o valor _blank a ser usado no atributo target da tag <a>;.
     * Indica que o destino do link ou hiperlink será aberta em uma nova janela ou aba.
     */
    const NOVA_JANELA=true;

    private $endereco;

    public function __construct($href=null, $texto=null, $novaJanela=false) {
        parent::__construct('A');
        $this->endereco = EXT_Utils::retornaUrl($href);
        $this->add($texto);

        if ($novaJanela) {
            $this->setClasse('novaJanela');
            
            //Abrir página em nova janela.
            EXT_Tag_Script::addScript("
                    $('.novaJanela').click(function() {
                        window.open(this.href);
                        return false;
                    });"
            );
        }        
    }

    /**
     * Endereço do link, absuluto ou relativo.
     * @method setEndereco()
     * @param $endereco - caminho para onde o link ou hiperlink aponta.
     */
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    /**
     * Adiciona a âncora da tag <a> o texto que será exibido para o 
     * usuário. 
     * @method setTexto()
     * @param $texto - Texto que será exibido no link.
     */
    public function setTexto($texto) {
        $this->add($texto);
    }

    /**
     * Renderiza a tag <a> na tela.
     * @method show()
     */
    public function show() {
        if ($this->endereco != null) {
            $this->href = $this->endereco;
        }

        parent::show();
    }

}

?>
