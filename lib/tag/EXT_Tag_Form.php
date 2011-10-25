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
    const GET='get';
    const POST='post';

    public function __construct($id, $metodo=EXT_Tag_Form::POST) {
        parent::__construct('FORM');
        $this->setAtributo('method',$metodo);
        $this->setId($id);
        $this->setNome($id);
    }

    public function setAcao($url) {
        $this->setAtributo('action', EXT_Utils::retornaUrl($url));
    }

    public function getAcao() {
        return $this->getAtributo('action');
    }

}
?>
