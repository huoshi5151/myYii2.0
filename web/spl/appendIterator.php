<?php
/**
 * Created by walter371.
 * FileName: appendIterator.php
 * Date: 2014/11/20
 * Time: 21:38
 * 将两个数组合并
 */
$array_a = new ArrayIterator(array('a','b','c'));
$array_b = new ArrayIterator(array('d','e','f'));

$it = new AppendIterator();

$it->append($array_a);  //通过append方法把迭代器的对象添加到ArrayIterator对象中
$it->append($array_b);

foreach($it as $key=>$value){
    echo $value."\n";
}