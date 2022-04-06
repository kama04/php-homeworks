<?php

function prFlDr($direct) {
$dir = opendir($direct);
while(false !== ($file = readdir($dir))) {

if($file =='.' || $file == '..') {continue;}

$fllePath = $direct .'/'. $file;

if(is_dir($fllePath)) {
echo "d: ".$file."  ".PHP_EOL;

prFlDr($fllePath);
}
else {
echo "  f: ".$file."   ".PHP_EOL;
}
}
closedir($dir);

}
prFlDr('..');