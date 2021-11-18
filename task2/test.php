<?php

header("Content-type: image/png");

$im = imagecreatefrompng("image.png");



imagepng($im);


?>