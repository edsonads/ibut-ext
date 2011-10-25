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


//IbutExt::importar('css.EXT_Css_Regra');

class EXT_Tag_Style extends EXT_Base_Tag {

    public static $styleInterno;

    public static function init() {
        if (empty(self::$styleInterno)) {
            self::$styleInterno = new EXT_Base_Tag('STYLE');
            self::$styleInterno->type='text/css';
        }
        return true;
    }

    public static function addRegra(EXT_Css_Regra $regra) {
        self::init();
        self::$styleInterno->add($regra);
    }

    public static function getRegras() {
        return self::$styleInterno;
    }
    

}

?>
