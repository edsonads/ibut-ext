<?php

class EXT_Utils {

    private static function validaTipo($valor) {
        if (is_string($valor) && $valor != 'true' && $valor != 'false') {
            return (string) "'{$valor}'";
        }

        if (is_bool($valor)) {
            return $valor ? 'true' : 'false';
        }

        if (is_int($valor)) {
            return (int) $valor;
        }
    }

}

?>
