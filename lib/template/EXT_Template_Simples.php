<?php

class EXT_Template_Simples extends EXT_Template_Base {

    private $topLink;
    private $pagina;
    private $topo;
    private $navBar;
    private $mapa;
    private $principal;
    private $rodape;

    public function __construct() {
        parent::__construct();
        $this->topLink = new EXT_Tag_Div();
        $this->topLink->setId('template-toplink');
        $this->pagina = new EXT_Tag_Div();
        $this->pagina->setId('template-simples');
        $this->topo = new EXT_Tag_Div();
        $this->topo->setId('topo');
        $this->navBar = new EXT_Tag_Div();
        $this->navBar->setId('nav');
        $this->mapa = new EXT_Tag_Div();
        $this->mapa->setId('mapa');
        $this->principal = new EXT_Tag_Div();
        $this->principal->setId('principal');
        $this->rodape = new EXT_Tag_Div();
        $this->rodape->setId('rodape');
    }

    protected function _setToplink($conteudo) {
        $content=new EXT_Tag_Div();
        $content->setClasse('content');
        $content->add($conteudo);
        $this->topLink->add($content);
    }
    
    protected function _setTopo($conteudo) {
        $this->topo->add($conteudo);
    }

    protected function _setNavBar($conteudo) {
        $this->navBar->add($conteudo);
    }

    protected function _setMapaDoSite($conteudo) {
        $this->mapa->add($conteudo);
    }

    protected function _setPrincipal($conteudo) {
        $this->principal->add($conteudo);
    }


    protected function _setRodape($conteudo) {
        $this->rodape->add($conteudo);
    }

    public function show() {
        $this->pagina->add($this->topo);
        $this->pagina->add($this->navBar);
        $this->pagina->add($this->mapa);
        $this->pagina->add($this->principal);
        $this->pagina->add($this->rodape);
        $this->add($this->topLink);
        $this->add($this->pagina);
        parent::show();
    }

}

?>
