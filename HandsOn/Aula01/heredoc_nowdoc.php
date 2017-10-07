<?php

$certi = "zend";

$curso = <<< TEXTO

Estou me preparando para certificacao $certi na 4linux;

TEXTO;

echo $curso;

echo "<hr>";

$curso = <<< 'TEXTO'

Estou me preparando para a certificacao $certi na 4linux;

TEXTO;

echo $curso;