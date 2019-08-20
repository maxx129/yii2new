<?php

ob_start();

echo 'Hello!';
echo 'Hello!';
echo 'Hello!';
echo 'Hello!';
echo 'Hello!';

$content = ob_get_contents();

ob_clean();

$content = strtr($content, 'o', 'O');

echo $content;