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

class EXT_Tag_Input extends EXT_Base_Tag {
    const CAMPO = 'text';
    const CAMPO_INVISIVEL = 'hidden';
    const CAMPO_SENHA = 'password';
    const CAIXA_DE_CHECAGEM = 'checkbox';
    const CAIXA_DE_OPCAO = 'radio';
    const BOTAO = 'button';
    const BOTAO_ENVIAR = 'submit';
    const BOTAO_LIMPAR = 'reset';
    const ARQUIVO= 'file';

    private $nome;
    private $tipo;
    private $valor;
    private $tamanho;
    private $classe;
    private $apenasLeitura;

    /**
     * Classe para manipulação de elementos do tipo <input> usado para criação de componentes de entrada de dados.
     * @package ibutext.tag
     */
    public function __construct($nome, $tipo, $valor=null, $tamanho=null, $classe=null, $apenasLeitura=false) {
        parent::__construct('INPUT');
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->valor = $valor;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
        $this->apenasLeitura = $somenteLeitura;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setTamanho($valor) {
        $this->tamanho = $valor;
    }

    public function setMaxCaractere($valor) {
        $this->maxlength = $valor;
    }

    public function setMinimo($valor) {
        $this->min = $valor;
    }

    public function setMaximo($valor) {
        $this->max = $valor;
    }

    public function apenasLeitura($valor) {
        $this->apenasLeitura = $valor;
    }

    public function setTeclaDeAtalho($tecla) {
        $this->_setTeclaDeAtalho($tecla);
    }

    public function setTabIndex($numero) {
        $this->_setTabIndex($numero);
    }

    public function show() {
        $this->name = $this->nome;
        $this->type = $this->tipo;
        
        if ($this->valor != null) {
            $this->setAtributo('value', $this->valor);
        }
        
        if ($this->tamanho != null) {
            $this->setAtributo('size',$this->tamanho);
        }
        
        if ($this->classe != null) {
            $this->setAtributo('class',$this->classe);
        }
        
        if ($this->apenasLeitura) {
            $this->setAtributo('readonly',true);
        }


        $this->tagUnica(true, false);
        parent::show();
    }

}

?>
