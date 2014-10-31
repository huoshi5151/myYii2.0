<?php
/**
 * Created by walter371
 * Date: 2014/10/31
 * Time: 12:06
 */
header('Content-type:text/html;charset=utf-8');
try{
    $sdn='mysql:host=localhost;dbname=blog';
    $username='root';
    $password='123456';
    $pdo=new PDO($sdn,$username,$password);
    var_dump($pdo);
}catch (PDOException $e){
    var_dump($e);
}