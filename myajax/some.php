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
body body blablabla <br>
body body blablabla <br>
body body blablabla <br>
</body>
</html>
<?php

$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$connection = new PDO('mysql:host=localhost;dbname=test','root', '');
//var_dump($connection); - тестим правильно ли подключение

$sql = 'INSERT INTO posts (title, content) VALUES (:title, :content)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);