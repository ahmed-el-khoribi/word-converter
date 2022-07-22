<?php
require_once  __DIR__ . '/vendor/autoload.php';

use WordConverter\WordConverter;

$word = "Ahmed";
$converted  = WordConverter::reverse($word);
print_r($converted);

?>