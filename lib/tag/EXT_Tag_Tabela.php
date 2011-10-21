<?php

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
