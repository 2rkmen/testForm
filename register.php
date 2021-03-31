<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
print_r($_POST);

$filename = 'array.txt';

// Запись.
$data = serialize($_POST);      // PHP формат сохраняемого значения.
//$data = json_encode($bookshelf);  // JSON формат сохраняемого значения.
file_put_contents($filename, $data);

// Чтение.
//$data = file_get_contents($filename);
//$bookshelf = json_decode($data, TRUE); // Если нет TRUE то получает объект, а не массив.
//$bookshelf = unserialize($data);
?>
</pre>
</body>
</html>
