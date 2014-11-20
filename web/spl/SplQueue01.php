<?php
/**
 * Created by walter371.
 * FileName: SplQueue01.php
 * Date: 2014/11/16
 * Time: 13:03
 * http://www.imooc.com/video/2519
 */
 $obj = new SplQueue();
$obj->enqueue("a"); //插入一个节点到队列的top位置
$obj->enqueue("b");
$obj->enqueue("c");
print_r($obj);
echo "bottom ".$obj->bottom()."\n"; //enqueue最早插入的元素
echo "top ".$obj->top(),"\n";   //enqueue最后插入的元素
$obj->offsetSet(0,"A");
print_r($obj);  //队列里的offset=0是bottom所在位置，offset=1是top方向的相邻节点，依次类推
$obj->rewind(); //current之前需要先rewind一下
echo "current ".$obj->current()."\n";
//遍历队列
while($obj->valid()){
    echo $obj->key()." => ".$obj->current()."\n";
    $obj->next();
}
$dequeue = $obj->dequeue(); //dequeue提取队列中bottom位置的元素并返回，同时删除链表中该元素
echo "dequeue ".$dequeue."\n";
print_r($obj);
$obj->rewind();
$obj->next();
$dequeue1 = $obj->dequeue();
echo "dequeue ".$dequeue1."\n";
print_r($obj);
echo "current ".$obj->current()."\n";
