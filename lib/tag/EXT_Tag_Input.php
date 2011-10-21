<?php

/**
 * Classe para manipulação de elementos do tipo <input> usado para criação de componentes de entrada de dados.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.tag
 */
class EXT_Tag_Input extends EXT_Base_Tag {
    const CAMPO = 'text';
    const CAMPO_INVISIVEL = 'hidden';
    const CAMPO_SENHA = 'password';
    const CAIXA_DE_CHECAGEM = 'checkbox';
    const CAIXA_DE_OPCAO = 'radio';
    const BOTAO = 'button';
    const ENVIAR = 'submit';
    const LIMPAR = 'reset';
    const ARQUIVO= 'file';

    private $nome;
    private $tipo;
    private $valor;
    private $tamanho;
    private $classe;

    public function __construct($nome, $tipo, $valor=null, $tamanho=null, $classe=null, $somenteLeitura=false) {
        parent::__construct('INPUT');
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->valor = $valor;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
        if ($somenteLeitura) {
            $this->readonly = true;
        }
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
        $this->readonly = $valor;
    }

    public function show() {
        $this->name = $this->nome;
        $this->type = $this->tipo;
        if ($this->valor != null) {
            $this->value = $this->valor;
        }
        if ($this->tamanho != null) {
            $this->size = $this->tamanho;
        }
        if ($this->classe != null) {
            $this->class = $this->classe;
        }

        $this->eUnica(true, false);
        parent::show();
    }

}
?>
