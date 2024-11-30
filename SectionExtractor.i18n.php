<?php
if (!defined('IS_NOT_CASE_SENSITIVE')) {
    define('IS_NOT_CASE_SENSITIVE', 0);
}
if (!defined('IS_CASE_SENSITIVE')) {
    define('IS_CASE_SENSITIVE', 1);
}

$magicWords = [];

$magicWords['en'] = [
   'SectionExtractor' => [ IS_NOT_CASE_SENSITIVE, 'SectionExtractor' ]
];
