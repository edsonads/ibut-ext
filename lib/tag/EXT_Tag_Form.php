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

class EXT_Tag_Form extends EXT_Base_Tag {
    const METODO_GET='GET';
    const METODO_POST='POST';
    const ENCTYPE_CODIFICADO='application/x-www-form-urlencoded';
    const ENCTYPE_NAOCODIFICAO='multipart/form-data';
    const ENCTYPE_TEXTO='text/plain';

    /**
     * A tag <form> é usado para criar um formulário HTML para entrada do usuário.
     * Pode conter elementos de entrada, como campos de texto, <br/>
     * checkboxes, botões de rádio, botões de envio e muito mais.<br/>
     * Um formulário também pode conter menus select, textarea, fieldset, legend,<br/>
     * e elementos do rótulo. E são usados ​​para transmitir dados para um servidor.
     * @package ibutext.tag
     */
    public function __construct($id, $metodo=EXT_Tag_Form::METODO_POST) {
        parent::__construct('FORM');
        $this->setAtributo('method', $metodo);
        $this->setId($id);
        $this->setNome($id);
    }

    /**
     * Especifica para onde enviar o formulário de dados, quando é submetido.<br/><br/>
     * OBS.: informe o caminho a partir da pasta raiz.<br/><br/>
     * Ex.: Para o caminho "http://www.meudominio.com.br/controle/action",<br/>
     * será necessário infromar apenas "controler/action".<br/><br/>
     *
     * @param string $url Endereço para onde o formulário será enviado.
     */
    public function setAcao($url) {
        $this->setAtributo('action', EXT_Utils::retornaUrl($url));
    }

    /**
     * Recupera o valor do atributo "action" do form.
     * @return string Retorna o valor do atributo "action".
     */
    public function getAcao() {
        return $this->getAtributo('action');
    }

    /**
     * Especifica como os dados do formulário devem ser codificados antes de enviá-lo para um servidor.
     * @param <type> $url
     */
    public function setEnctype($modo=EXT_Tag_Form::ENCTYPE_CODIFICADO) {
        $this->setAtributo('enctype', $modo);
        return $this;
    }
}
?>
