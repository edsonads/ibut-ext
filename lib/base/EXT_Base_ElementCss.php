<?php

/**
 * Classe para manipulação de regras CSS.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.base
 */
abstract class EXT_Base_ElementCss{
    const ID='#';
    const CLASSE='.';
    const HTML='';

    private $nome;          // nome do estilo
    private $seletor;
    private $propiedades;    // atributos
    static private $carregados; // array de estilos carregados

    /**
     * Constroi uma nova regra CSS.
     * @param string $seletor  Tipo de seletor CSS ('#' -> id, '.' -> class, '' -> html)
     * @param string $nome     Nome da regra CSS.
     */
    public function __construct($seletor, $nome) {
        // atribui o nome do estilo
        $this->seletor = $seletor;
        $this->nome = $nome;
    }

    /**
     * intercepta as atribuições á propriedades do objeto
     * @param string $propriedade nome da propriedade
     * @param string $valor valor
     */
    public function __set($propriedade, $valor) {
        // substitui o "_" por "-" no nome da propriedade
        $propriedade = str_replace('_', '-', $propriedade);
        // armazena os valores atribuídos ao array properties
        $this->propiedades[$propriedade] = $valor;
    }

    /**
     * método show()
     * exibe a tag na tela
     */
    public function show() {
        // verifica se este estilo já foi carregado
        if (!isset(self::$carregados[$this->nome])) {
//            echo "<style type='text/css' media='screen'>\n";

            // exibe a abertura do estilo
            echo $this->seletor . "{$this->nome}";

            echo "{";
            if ($this->propiedades) {
                // percorre as propriedades
                foreach ($this->propiedades as $nome => $valor) {
                    echo "{$nome}: {$valor};";
                }
            }
            echo "}";
//            echo "</style>\n";

            // marca o estilo como já carregado
            self::$carregados[$this->nome] = true;
        }
    }

}

?>