<?php
/**
 * Created by walter371.
 * FileName: arrayIterator.php
 * Date: 2014/11/20
 * Time: 20:32
 * 迭代器arrayIterator
 * http://www.imooc.com/video/2600
 */
 $fruit = array(
     'apple' => 'apple value',
     'orange' => 'orange value',
     'grape' => 'grape value',
     'plum' => 'plum value',
 );

echo "######Use print_r\n";
print_r($fruit);

echo "#####Use foreach\n";
foreach($fruit as $key=>$value){
    echo $key."=>".$value."\n";
}

//使用arrayIterator遍历数组
$obj = new arrayObject($fruit);
$it = $obj->getIterator();
//var_dump($it);

echo "#####Use arrayIterator in for\n";
foreach($it as $key => $value){
    echo $key .":". $value."\n";
}

echo "#####Use arrayIterator in while\n";
$it->rewind();  //调用current之前不要忘记调用rewind
while($it->valid()){
    echo $it->key().":".$it->current()."\n";
    $it->next();    //这里不要忘记移动指针
}

//跳过某些元素进行打印
echo "#####Use seek before while\n";
$it->rewind();
if($it->valid()) {  //这里增加if判断是加强程序的健壮性，以防在while开始的时候，指针在空的位置
    $it->seek(1);   //跳过下表为1的
    while ($it->valid()) {
        echo $it->key() . ":" . $it->current() . "\n";
        $it->next();
    }
}

//排序
echo "### Use ksort\n";
$it->ksort();   //对key进行排序，也可以配合ksort来进行跳过key的最大（小）值来进行操作
foreach($it as $key=>$value){
    echo $key."=>".$value."\n";
}

echo "### Use asort\n";
$it->asort();   //对value进行排序
foreach($it as $key=>$value){
    echo $key."=>".$value."\n";
}
