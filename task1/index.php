<!--1. PHP и HTML. Напишите код на PHP-->
<!--В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.-->
<!--Нужно в переменную $b записать сокращенный текст новости по правилам:-->
<!--- обрезать до 180 символов-->
<!--- приписать многоточие-->
<!--- последние 2 слова и многоточие сделать ссылкой на полный текст новости.-->
<!--Какие проблемы вы видите в решении этой задачи? Что может пойти не так?-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> a {text-decoration: none} </style>
</head>
<body>
<?php
$a = file_get_contents("text.txt");
$link = "text.php";
$b = rtrim(mb_substr($a, 0,180));
$b .= "..." ;

$title = explode(" ", $b);
$length = count($title);
for ($i = 1; $i <= 2; $i++){
    $title[$length-$i] = '<a href="text.php">' .$title[$length-$i].'</a>';
}
foreach ($title as $word) {
    echo $word." ";
}
?>
</body>
</html>


<!--проблема заключается в том, что, при жестком ограничении на количество выводимых символов, часть -->
<!--последнего слова "съедается" и выводится не полностью.-->