<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'IO/JPEGXR.php';
}

$options = getopt("f:hDS");

function usage() {
    echo "Usage: php jpegdump.php [-h] [-D] [-S] -f <jpegfile>".PHP_EOL;
}

if ((isset($options['f']) === false) ||
    (is_readable($options['f']) === false)) {
    usage();
    exit(1);
}
$opts = array();

if (isset($options['h'])) {
  $opts['hexdump'] = true;
}
$opts['detail'] = ! isset($options['D']);

$sosScan = ! isset($options['S']);

$jpegfile = $options['f'];
$jpegdata = file_get_contents($jpegfile);

$jpeg = new IO_JPEGXR();
$jpeg->parse($jpegdata, true, $sosScan);

$jpeg->dump($opts);

exit(0);
