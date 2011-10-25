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
