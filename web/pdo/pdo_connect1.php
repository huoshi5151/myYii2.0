<?php
//pdo通过参数形式链接数据库
try{
    $dsn='mysql:host=localhost;dbname=blog';
    $username='root';
    $password='123456';
    $pdo=new PDO($dsn,$username,$password);
    var_dump($pdo);
}catch (PDOException $e){
    $e->getMessage();
}