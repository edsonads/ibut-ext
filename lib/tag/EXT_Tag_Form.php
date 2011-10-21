<?php

class EXT_Tag_Form extends EXT_Base_Tag {
    const GET='get';
    const POST='post';

    public function __construct($id, $metodo=EXT_Tag_Form::POST) {
        parent::__construct('FORM');
        $this->method = $metodo;
        $this->setId($id);
        $this->setNome($id);
    }

    public function setAcao($url) {
        $this->action = BASE_URL . '/' . $url;
    }

    public function getAcao() {
        return $this->action;
    }

}
?>
