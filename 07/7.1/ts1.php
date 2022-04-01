<?php

function prFlDr($direct) {
$dir = opendir($direct);
while(false !== ($file = readdir($dir))) {

if($file =='.' || $file == '..') {continue;}

$fullPath = $direct .'/'. $file;

if(is_dir($fullPath)) {
echo "d: ".$file."  ".PHP_EOL;

prFlDr($fullPath);
}
else {
echo "  f: ".$file."   ".PHP_EOL;
}
}
closedir($dir);

}
prFlDr('..');