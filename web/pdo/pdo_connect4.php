<?php
/**
 * pdo uri connect
 * Created by walter371.
 * FileName: pd_connect4.php
 * Date: 2014/10/31
 * Time: 13:53
 */
header('Content-type:text/html;charset=utf-8');
try{
    $dsn='uri:file://D:\Apache2.2\htdocs\yii2\basic\web\pdo\uri.txt';
    $username='root';
    $password='123456';
    $pdo=new PDO($dsn,$username,$password);
    var_dump($pdo);
}catch (PDOException $e){
    $e->getMessage();
}