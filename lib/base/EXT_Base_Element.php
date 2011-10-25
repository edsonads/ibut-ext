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


/**
 * classe para abstração de tags HTML.
 * @package ibutext.base
 * @abstract
 */
abstract class EXT_Base_Element {

    private $nome;
          // nome da TAG
    private $propriedades;
    // propriedades da TAG
    private $estilos;
    private $filhos;
    private $tagUnica;
    private $fecha;

    /**
     * instancia uma tag html
     * @param string $nome = nome da tag
     */
    public function __construct($nome) {
        $this->nome = $nome;
    }


//    /**
//     * retorna o valor de um atributo da tag.
//     * @param string $atributo
//     */
//    public function __get($atributo) {
//        return $this->propriedades[$atributo];
//    }
//
//    /**
//     * intercepta as atribuições à propriedades do objeto
//     * @param string $nome = nome da propriedade
//     * @param string $valor = valor
//     */
//    public function __set($atributo, $valor) {
//        // armazena os valores atribuídos
//        // ao array properties
//        $this->propriedades[$atributo] = $valor;
//    }

    
    public function setAtributo($nome, $valor) {
        $this->propriedades[$nome] = $valor;
    }

    public function getAtributo($nome) {
        return $this->propriedades[$nome];
    }

    /**
     * Adiciona uma propriedade ao atributo "style" da tag.
     * @param string $propriedade Nome da propriedade css.
     * @param string $valor Valor da propriedade css.
     */
    public function addEstilo($propriedade, $valor) {
        if (!strpos($this->estilos, $propriedade)) {
            $this->estilos .= $propriedade . ':' . $valor . ';';
        }
    }

    /**
     * Adiciona estilos (propriedade:valor) ao atributo "style" da tag.
     * @param array $estilos Mapa de array com lista de estilos no formato 'propriedade' => 'valor'.
     */
    public function addEstilos(array $estilos) {
        foreach ($estilos as $propriedade => $valor) {
            $this->addEstilo($propriedade, $valor);
        }
    }

    /**
     * método add()
     * adiciona um elemento filho
     * @param string $elemento = objeto filho
     */
    public function add($elemento) {
        $this->filhos[] = $elemento;
    }

    /**
     * Define se a tag é única ou dupla.
     * @param $valor  - O valor pode ser true ou false.
     */
    protected function tagUnica($eunica, $fecha) {
        $this->tagUnica = $eunica;
        $this->fecha = $fecha;
    }

    /**
     * Cria a tag de abertura.
     */
    private function open() {
        //Exibe a tag de abertura
        echo "<{$this->nome}";

        //Cria o atributo style e adiciona os estilos ao atributo da tag.
        if ($this->estilos != null) {
            echo ' style="' . $this->estilos . '"';
        }

        //Cria os atributos da tag. 
        if ($this->propriedades) {
            foreach ($this->propriedades as $name => $value) {
                echo " {$name}=\"{$value}\"";
            }
        }

        //Define o fim da tag de abertura
        if ($this->tagUnica) {
            if ($this->fecha) {
                echo '/>';
            } else {
                echo '>';
            }
        } else {
            echo '>';
        }
    }

    /**
     * Fecha a tag
     */
    private function close() {
        echo "</{$this->nome}>";
    }

    /**
     * exibe a tag na tela, juntamente com seu conteúdo
     */
    public function show() {
        //Chama o método open() para abrir a tag
        $this->open();

        //Se possuir conteúdo adiciona à tag
        if ($this->filhos) {
            foreach ($this->filhos as $child) {
                if (is_object($child)) {
                    $child->show();
                } else if ((is_string($child)) or (is_numeric($child))) {
                    echo $child;
                }
            }
            // fecha a tag
            $this->close();
        } else {
            //Se a tag não tiver conteúdo é for definida como única não será fechada.
            if (!$this->tagUnica) {
                $this->close();
            }
        }
    }

}
?>
