<?php

namespace frontend\helpers;

/**
 * Description of HighlightHelper
 *
 * @author max
 */
class HighlightHelper {
    
    public static function process($text, $content)
    {
        $words = explode(' ', trim($text));
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $content);
    }
}
