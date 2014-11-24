<?php
/**
 * Created by walter371.
 * FileName: MultipleIterator.php
 * Date: 2014/11/20
 * Time: 22:17
 * 组合多重数据
 * http://www.imooc.com/video/2603
 * 在命令行控制台中 php -f php文件名.php > 文件名.txt可以将输出内容保存在 文件名.txt中
 */
$idIterator = new ArrayIterator(array('01','02','03'));
$nameIterator = new ArrayIterator(array('张三','李四','王五'));
$ageIterator = new ArrayIterator(array('22','23','24'));

$it = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);

$it->attachIterator($idIterator,"ID");
$it->attachIterator($nameIterator,"NAME");
$it->attachIterator($ageIterator,"AGE");

foreach($it as $value){
    print_r($value);
}

/**
 * 以下为输出结果
 *Array
(
[ID] => 01
[NAME] => 张三
[AGE] => 22
)
Array
(
[ID] => 02
[NAME] => 李四
[AGE] => 23
)
Array
(
[ID] => 03
[NAME] => 王五
[AGE] => 24
)
*/