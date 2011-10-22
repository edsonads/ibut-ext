<?php

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
        $meta = new EXT_Base_Tag("META");
        $tipo = 'http-equiv';
        $meta->$tipo = "Content-Type";
        $meta->content = "text/html; charset=" . $codificacao;
        $meta->eUnica(true, false);
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
        $meta = new EXT_Base_Tag("META");
        $meta->name = "keywords";
        $meta->content = $palavrasChave;
        $this->head->add($meta);
    }

    /**
     * Descrição da página usada principalmente por 
     * robores de busca.
     * @param type $descricao 
     */
    public function setMetaDescricao($descricao) {
        $meta = new EXT_Base_Tag("META");
        $meta->name = "description";
        $meta->content = $descricao;
        $meta->eUnica(true, false);
        $this->head->add($meta);
    }

    /**
     * Adicionar folha de estilo ao Head.
     * @method addFolhaDeEstilo()
     * @param $href 
     */
    protected function addCss($url, $inHead=true) {

        $css = new EXT_Base_Tag("LINK");
        $css->type = 'text/css';
        $css->rel = 'stylesheet';
        $css->href = EXT_Utils::retornaUrl($url);
        $css->eUnica(true, false);

        if ($inHead) {
            $this->head->add($css);
        } else {
            $this->body->add($css);
        }
    }

    protected function addFavIcon($url) {
        $favicon = new EXT_Base_Tag("LINK");
        $favicon->type = 'image/x-icon';
        $favicon->rel = 'shortcut icon';
        $favicon->href = EXT_Utils::retornaUrl($url);
        $favicon->eUnica(true, false);
        $this->head->add($favicon);
    }

    protected function addScript($url, $inHead=true) {
        $script = new EXT_Base_Tag("SCRIPT");
        $script->type = 'text/javascript';
        $script->src = EXT_Utils::retornaUrl($url);

        if ($inHead) {
            $this->head->add($script);
        } else {
            $this->body->add($script);
        }
    }

    protected function addScriptFragment($fragmento, $inHead=true) {
        $script = new EXT_Base_Tag("SCRIPT");
        $script->type = 'text/javascript';
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
        $img->src = 'http://www.w3.org/Icons/valid-html401';
        $img->alt = 'Valid HTML 4.01 Strict';
        $img->height = '31';
        $img->width = '88';
        $img->eUnica(true, false);
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