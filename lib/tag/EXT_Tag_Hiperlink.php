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

class EXT_Tag_Hiperlink extends EXT_Base_Tag {
    
    const NOVA_JANELA=true; //Define se a janela será aberta em uma nova aba.
    private $url; //Endereço do link.

    /**
     * Classe para manipulação do elemento <a>.<br/>
     * O elemento é usado para criação de um link ou hiperlink.
     * @package ibutext.tag
     */
    public function __construct($url=null, $texto=null, $novaJanela=false) {
        parent::__construct('A');
        $this->url= EXT_Utils::retornaUrl($url);
        $this->add($texto);

        if ($novaJanela) {
            $this->setClasse('novaJanela');
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
     * @param string $url - caminho para onde o link ou hiperlink aponta.
     */
    public function setUrl($url) {
        $this->url = $endereco;
    }

    /**
     * Adiciona âncora à tag <a>. Texto que será exibido para o 
     * usuário. 
     * @param string $texto Texto que será exibido no link.
     */
    public function setTexto($texto) {
        $this->add($texto);
    }

    public function show() {
        if ($this->url != null) {
            $this->setAtributo('href', $this->url);
        }
        parent::show();
    }

}

?>
