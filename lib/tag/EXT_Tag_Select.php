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

class EXT_Tag_Select extends EXT_Base_Tag {

    public function __construct() {
        parent::__construct('SELECT');
    }

    public function addOpaco($valor, $texto, $selecionado=false) {
        $opcao = new EXT_Tag('OPTION');
        $opcao->setAtributo('value', $valor);
        $opcao->add($texto);

        if ($selecionado) {
            $opcao->setAtributo('selected', '');
        }

        $this->add($opcao);
    }

    public function setDesabilitar() {
        $this->setAtributo('disabled', 'disabled');
    }

    /**
     * Seleção múltipla.
     */
    public function setMultiselect() {
        $this->setAtributo('multiple', 'multiple');
    }
    
    /**
     * Cria lista 
     * @param int $tamanho 
     */
    public function setTamanhoDaLista($tamanho) {
        $this->setAtributo('size', $tamanho);
    }
    
}

?>