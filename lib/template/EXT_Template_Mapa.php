<?php

class EXT_Template_Mapa extends EXT_Tag_Div{

    private $contador;

    public function __construct($mapa, $separador=' :: ') {
        parent::__construct();
        $this->setId('mapa-do-site');

        foreach ($mapa as $texto => $link) {
            $this->contador++;

            if (count($mapa) == $this->contador) {
                $this->add($texto);
            } else {
                $a = new EXT_Tag_Hiperlink();
                $a->setTexto($texto);
                $a->setEndereco($link);
                $this->add($a);
                $this->add($separador);
                
            }
        }
    }

}

?>
