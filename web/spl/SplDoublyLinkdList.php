<?php
/**
 * Created by walter371.
 * FileName: SplDoublyLinkdList.php
 * Date: 2014/11/15
 * Time: 21:17
 */
 $obj = new SplDoublyLinkedList();
$obj->push(1);
$obj->push(2);  //把新的节点添加到链表的顶部（top）
$obj->unshift(11);  //把新的节点数据插入到最底部，bottom（head），数组下标为0
print_r($obj);
$obj->rewind(); //将指针指向bottom节点
echo "current point is ".$obj->current()."\n";    //当前指针所在节点
$obj->next();   //将指针指向下一个节点
echo "current point is ".$obj->current()."\n";    //当前指针所在节点
$obj->next();
$obj->prev();   //将指针指向上一个节点
$obj->next();
$obj->next();
//echo "current point is ".$obj->current()."\n";    //当前指针所在节点
if($obj->current()){
    echo "current point is valid\n";
}else{
    echo "current point is invalid\n";
}
$obj->rewind();
var_dump($obj->valid());    //$obj->valid()判断当前指针是否有效，如果有效，返回true
echo "<hr />";
//echo "current point is ".$obj->current()."\n";    //当前指针所在节点
$obj->pop();//      把位于top位置的节点从链表中山删除并返回
print_r($obj);
//echo "current ".$obj->current()."\n";   //11
$obj->next();
$obj->pop();
echo "current ".$obj->current()."\n";   //如果current正好指向top位置，调用pop后current失效，为空

$obj->push(3);
$obj->push(4);  //push把新的节点添加到链表的顶部（top）

$obj->shift();  //  和pop相反，把位于bottom的节点从链表中删除并返回
print_r($obj);
echo "current ".$obj->current()."\n";
echo "当前链表底部的元素为 ".$obj->bottom()." \n";    //当前current指针位置不变
echo "当前链表顶部元素为 ".$obj->top();"\n";       //当前current指针位置不变