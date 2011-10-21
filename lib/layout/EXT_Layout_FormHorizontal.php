<?php

class EXT_Layout_FormHorizontal extends EXT_Tag_Lista {

    private $hvv;

    public function __construct() {
        parent::__construct('UL');
        $this->setClasse('form');
    }

    public function addLinha() {
        if (isset($this->hvv)) {
            $this->addItem($this->hvv);
        }
        $this->hvv = new EXT_Tag_Lista('UL');
        $this->hvv->setClasse('hvv');
    }

    public function addColuna($elemento, $legenda=null) {
        $leg = new EXT_Tag_Label($legenda);

        if ($legenda != null) {
            $this->hvv->addItem($leg);
            $this->hvv->itemAdd($elemento);
        }else{
            $this->hvv->addItem($elemento);
        }
    }

    public function show() {
        $this->addItem($this->hvv);
        parent::show();
    }

}
?>
