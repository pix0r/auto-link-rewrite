<?php

require('auto-link-text.php');

$input = <<<EOF
This is my text.  I wonder if you know about asking questions on StackOverflow:
Check This out http://www.stackoverflow.com/questions/1925455/how-to-mimic-stackoverflow-auto-link-behavior

Also, base_convert php function?
http://pt.php.net/manual/en/function.base-convert.php#52450

http://pt.php.net/manual/en/function.base-convert.php?wtf=hehe#52450

http://a.b/c/d/e/f/test

and http://a.b/c/d/e/f/g/h/i/j/k/l/m/n/o/p/q/r/s/t/u/v/z/y/w/z/test

EOF;

$output = auto_link_text($input);
echo $output;

