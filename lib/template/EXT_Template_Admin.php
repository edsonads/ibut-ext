<?php

class EXT_Template_Admin extends EXT_Template_Base {

    private $pagina;
    private $topo;
    private $nav;
    private $menu;
    private $conteudo;
    private $rodape;

    public function __construct() {
        parent::__construct();
        $this->pagina = new EXT_Tag_Div();
        $this->pagina->setId('pagina');
        $this->topo = new EXT_Tag_Div();
        $this->topo->setId('topo');
        $this->nav = new EXT_Tag_Div();
        $this->nav->setId('nav');
        $this->menu = new EXT_Tag_Div();
        $this->menu->setId('menu');
        $this->conteudo = new EXT_Tag_Div();
        $this->conteudo ->setId('conteudo');
        $this->rodape = new EXT_Tag_Div();
        $this->rodape->setId('rodape');
    }

    protected function _setTopo($conteudo) {
        $this->topo->add($conteudo);
    }

    protected function _setNav($conteudo) {
        $this->nav->add($conteudo);
    }

    protected function _setMenu($conteudo) {
        $this->menu->add($conteudo);
    }

    protected function _setConteudo($conteudo) {
        $this->conteudo->add($conteudo);
    }

    protected function _setRodape($conteudo) {
        $this->rodape->add($conteudo);
    }

    public function show() {
        $this->pagina->add($this->topo);
        $this->pagina->add($this->nav);
        $this->pagina->add($this->menu);
        $this->pagina->add($this->conteudo);
        $this->pagina->add($this->rodape);
        $this->add($this->pagina);
        parent::show();
    }

}

?>
