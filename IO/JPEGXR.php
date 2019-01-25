<?php

/*
  IO_JPEGXR class -- v2.4
  (c) 2019/01/25 yoya@awm.jp
  ref) http://pwiki.awm.jp/~yoya/?JPEG_XR
  https://www.itu.int/rec/T-REC-T.832
 */

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'IO/Bit.php';
    require_once 'IO/TIFF.php';
}

class IO_JPEGXR extends IO_TIFF {
}
