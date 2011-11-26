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
    const BOTAO = 'button';
    const CAIXA_DE_CHECAGEM = 'checkbox';
    const ARQUIVO= 'file';
    const CAMPO_INVISIVEL = 'hidden';
    const IMAGEM = 'image';
    const CAMPO_SENHA = 'password';
    const CAIXA_DE_OPCAO = 'radio';
    const BOTAO_LIMPAR = 'reset';
    const BOTAO_ENVIAR = 'submit';
    const CAMPO = 'text';

    private $nome;
    private $tipo;
    private $valor;
    private $tamanho;
    private $classe;
    private $apenasLeitura;
    private $qtdCaractere;
    private $alt;

    /**
     * A tag <input> é usado para selecionar informações do usuário.
     * Um campo de entrada pode variar de muitas formas, dependendo do atributo "type". 
     * Um campo de entrada pode ser um campo de texto, uma caixa de seleção, um campo de senha, um botão de rádio,
     * um botão, e muito mais.
     *
     * @param string $nome Nome da input.
     * @param string $tipo Tipo da input.
     * @param string $valor Valor da input.
     * @param int $tamanho Comprimento do campo.
     * @param string $classe Classe css.
     * @param boolean $apenasLeitura Informe true se o campo for editavel e false para o campo somente leitura.
     * @param int $qtdCaractere Limita a quantidade de caracteres que podem ser inseridos nos campos do tipo text e password.
     * @param int $alt 
     * 
     * @package ibutext.tag
     */
    public function __construct($nome, $tipo, $valor=null, $tamanho=null, $classe=null, $apenasLeitura=false, $qtdCaractere=null, $alt=null) {
        parent::__construct('INPUT');
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->valor = $valor;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
        $this->apenasLeitura = $apenasLeitura;

        if ($this->tipo == EXT_Tag_Input::CAMPO || $this->tipo == EXT_Tag_Input::CAMPO_SENHA) {
            $this->qtdCaractere = $qtdCaractere;
        }

        if ($this->tipo == EXT_Tag_Input::IMAGEM) {
            $this->alt = $alt;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    /**
     * Especifica o tipo de um elemento de entrada.
     * @param string $tipo Tipo do elemento.
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setAlt($valor) {
        $this->alt = $valor;
    }

    public function setTamanho($valor) {
        $this->tamanho = $valor;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function setVerificado($marcado) {
        if ($marcado ==true && ($this->tipo == EXT_Tag_Input::CAIXA_DE_CHECAGEM || $this->tipo == EXT_Tag_Input::CAIXA_DE_OPCAO)) {
            $this->setAtributo('checked','checked');
        }
    }

    /**
     * Especifica o comprimento máximo (em caracteres) de um campo de entrada (para type = "text" ou type = "password")
     * @param type $valor 
     */
    public function setQtdCaractere($valor) {
        $this->qtdCaractere = $valor;
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
        $this->setAtributo('name', $this->nome);
        $this->setAtributo('type', $this->tipo);

        if ($this->valor != null) {
            $this->setAtributo('value', $this->valor);
        }

        if ($this->tamanho != null) {
            $this->setAtributo('size', $this->tamanho);
        }

        if ($this->classe != null) {
            parent::setClasse($this->classe);
        }

        if ($this->apenasLeitura) {
            $this->setAtributo('readonly', 'readonly');
        }

        //Adiciona o atributo maxlength apenas se for passado algum valor e se o tipo
        //for text ou password.
        if ($this->qtdCaractere != null) {
            $this->setAtributo('maxlength', $this->qtdCaractere);
        }

        if ($this->alt != null) {
            $this->setAtributo('alt', $this->alt);
        }


        $this->tagUnica(true, true);
        parent::show();
    }

}
?>

