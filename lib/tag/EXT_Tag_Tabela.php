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
 * classe EXT_Tabela
 * responsável pela exibição de tabelas
 */
class EXT_Tag_Tabela extends EXT_Base_Tag {

    private $linhas;
    private $valores;
    private $classeColuna;
    private $classeLinha;

    public function __construct() {
        parent::__construct('TABLE');
    }

    public function addLinha($classe=null) {
        $linha = new EXT_Base_Tag('TR');

        if ($classe != null) {
            $linha->setClasse($classe);
        }else{
            $linha->setClasse($this->classeLinha);
        }
        $this->linhas[] = $linha;
    }

    public function addColuna($valor, $colspan=null, $rowspan=null, $classe=null) {
        $coluna = new EXT_Base_Tag('TD');
        $coluna->add($valor);

        if ($colspan != null) {
            $coluna->colspan = $colspan;
        }
        
        if ($rowspan != null) {
            $coluna->rowspan = $rowspan;
        }

        if ($classe != null) {
            $coluna->setClasse($classe);
        }else{
            $coluna->setClasse($this->classeColuna);
        }
        
        
        $this->linhas[count($this->linhas) - 1]->add($coluna);
        $this->valores[count($this->linhas) - 1][] = $valor;
    }

    public function setBorda($largura) {
        $this->border = $largura;
    }

    public function setLargura($largura) {
        $this->width = $largura;
    }

    public function setClasseColuna($classe) {
        $this->classeColuna = $classe;
    }

    public function setClasseLinha($classe) {
        $this->classeLinha = $classe;
    }

    public function getCelula($linha, $coluna) {
        return $this->valores[$linha][$coluna];
    }
    
    public function show() {
        foreach ($this->linhas as $linha) {
            $this->add($linha);
        }
        parent::show();
    }

}

?>
