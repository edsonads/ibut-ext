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


abstract class EXT_Template_Base {

    private $html;
    private $head;
    private $body;

    public function __construct() {
        echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
        $this->html = new EXT_Base_Tag('HTML');
        $this->head = new EXT_Base_Tag('HEAD');
        $this->body = new EXT_Base_Tag('BODY');
    }

    protected function setCodificacao($codificacao) {
        $meta = new EXT_Tag_Meta();
        $tipo = 'http-equiv';
        $meta->setAtributo($tipo,"Content-Type");
        $meta->setAtributo('content',"text/html; charset=" . $codificacao);
        $this->head->add($meta);
    }

    protected function setTitulo($titulo) {
        $title = new EXT_Base_Tag('TITLE');
        $title->add($titulo);
        $this->head->add($title);
    }

    /**
     * Adicionar palavras chave, 
     * para indexação pelos buscadores.
     * @param type $_conteudo 
     */
    public function setMetaPalavrasChave($palavrasChave) {
        $meta = new EXT_Tag_Meta();
        $meta->setAtributo('name',"keywords");
        $meta->setAtributo('content', $palavrasChave);
        $this->head->add($meta);
    }

    /**
     * Descrição da página usada principalmente por 
     * robores de busca.
     * @param type $descricao 
     */
    public function setMetaDescricao($descricao) {
        $meta = new EXT_Tag_Meta();
        $meta->setAtributo('name',"description");
        $meta->setAtributo('content',$descricao);
        $this->head->add($meta);
    }

    /**
     * Adicionar folha de estilo ao Head.
     * @method addFolhaDeEstilo()
     * @param $href 
     */
    protected function addCss($url, $inHead=true) {
        $css = new EXT_Tag_Link();
        $css->setTipo(EXT_Tag_Link::TIPO_CSS);
        $css->setRel(EXT_Tag_Link::REL_CSS);
        $css->setHref($url);

        if ($inHead) {
            $this->head->add($css);
        } else {
            $this->body->add($css);
        }
    }

    protected function addFavIcon($url) {
        $favicon = new EXT_Tag_Link();
        $favicon->setTipo(EXT_Tag_Link::TIPO_ICONE);
        $favicon->setRel(EXT_Tag_Link::REL_ICONE);
        $favicon->setHref($url);
        $this->head->add($favicon);
    }

    protected function addScript($url, $inHead=true) {
        $script = new EXT_Base_Tag("SCRIPT");
        $script->setAtributo('type','text/javascript');
        $script->setAtributo('src',EXT_Utils::retornaUrl($url));

        if ($inHead) {
            $this->head->add($script);
        } else {
            $this->body->add($script);
        }
    }

    protected function addScriptFragment($fragmento, $inHead=true) {
        $script = new EXT_Base_Tag("SCRIPT");
        $script->setAtributo('type','text/javascript');
        $script->add($fragmento);

        if ($inHead) {
            $this->head->add($script);
        } else {
            $this->body->add($script);
        }
    }

    public function add($conteudo) {
        $this->body->add($conteudo);
    }

    public function validaHtmlW3C() {
        $img = new EXT_Tag_Imagem();
        $img->setAtributo('src','http://www.w3.org/Icons/valid-html401');
        $img->setAlt('Valid HTML 4.01 Strict');
        $img->setAtributo('height','31');
        $img->setAtributo('width','88');
        
        $p = new EXT_Tag_Paragrafo();
        $p->add(new EXT_Tag_Hiperlink('http://validator.w3.org/check?uri=referer', $img));
        return $p;
    }

    public function show() {
        $this->head->add(EXT_Tag_Style::getRegras());
        $this->head->add(EXT_Tag_Script::getScripts()); //adiciona os scripts internos.
        $this->html->add($this->head);
        $this->html->add($this->body);
        $this->html->show();
    }

}

?>