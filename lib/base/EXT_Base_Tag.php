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

/*
 * Inclui a classe abstrata EXT_Base_Element à página.
 * @static
 */
IbutExt::importar('base.EXT_Base_Element');

/**
 * Classe que contém os principais métodos para a manipulação de tags Html.
 * @package ibutext.base
 */
class EXT_Base_Tag extends EXT_Base_Element {

    
    /**
     * Constroui uma tag Html.
     * @param string $tag Tag a ser criada.
     */
    public function __construct($tag) {
        parent::__construct($tag);
    }

    /**
     * Define um valor para o atibuto "id" da tag Html.
     * @param string $id Nome do atributo Id.
     */
    public function setId($id) {
        $this->setAtributo('id',$id);
        return $this;
    }

    /**
     * Recupera o valor do atibuto "id" da tag html.
     * @return string Retorna o nome do atributo id.
     */
    public function getId() {
        return $this->getAtributo('id');
    }

    /**
     * Define um valor para o atibuto "class" da tag html.
     * @param string $classe - Nome do atributo "class".
     */
    public function setClasse($classe) {
        $this->setAtributo('class',$classe);
        return $this;
    }

    /**
     * Recupera o valor do atibuto "class".
     * @return string Retorna o nome do atributo "class".
     */
    public function getClasse() {
        return $this->getAtributo('class');
    }

    /**
     * Define um valor para o atributo "name" da tag Html.
     * @param string $nome Nome do atributo "name".
     */
    public function setNome($nome) {
        $this->setAtributo('name',$nome);
        return $this;
    }
    
    /**
     * Recupera o valor do atibuto "name" da tag Html.
     * @return string Retorna o nome do atributo "name".
     */
    public function getNome() {
        return $this->getAtributo('name');
    }

    protected function setTitulo($titulo) {
        $this->setAtributo('title',$titulo);
    }
    
    protected function getTitulo() {
        $this->getAtributo('title');
    }    

    /**
     * Define a tecla de atalho usada em conjunto com a tecla ALT, <br/>
     * para direcionar o foca para a tag.
     */
    protected function setAccesskey($tecla){
        $this->setAtributo('accesskey',$tecla);
        return $this;
    }

    /**
     * Define a ordem de acesso a tag, ao usar a tecla TAB para navegar<br/>
     * nos elementos HTML.
     */
    protected function setTabIndex($numero){
        $this->setAtributo('tabindex',$numero);
        return $this;
    }
    
    public function setDir($dir) {
        $this->setAtributo('dir',$dir);
        return $this;
    }    

    public function setLang($lang) {
        $this->setAtributo('lang',$lang);
        return $this;
    }    

    public function show() {
        parent::show();
    }

}

?>
