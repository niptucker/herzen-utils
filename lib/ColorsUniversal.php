<?php

namespace Herzen\Utils;

class ColorsUniversal extends Colors {

    public function getColoredString($string, $foreground_color = null, $background_color = null) {
        if (php_sapi_name() == "cli") {
            return parent::getColoredString($string, $foreground_color, $background_color);
        } else {
            return '<span style="'
                . 'background-color: ' . $background_color  . '; '
                . 'color: ' . $foreground_color . ';'
                . ">" . $string . '</span>';
        }
    }
}

