<!--2. Веб-разработка-->
<!--На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.-->
<!--Обратите внимание на размер и пропорции, и подумайте о времени загрузки.-->
<!--Пришлите ссылку на репозиторий с решением-->
<!--Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением.-->

<?php
header('Content-Type: image/png');
$im = imagecreatefrompng("image.png");


// задание максимальной ширины и высоты
$width = 200;
$height = 100;

// тип содержимого
header('Content-Type: image/jpeg');

// получение новых размеров
$width_orig = imagesx($im);
$height_orig = imagesy($im);
$image_p = imagecreatetruecolor($width, $height);
imagecopyresized($image_p, $im, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);


imagepng($image_p);
imagepng($im);