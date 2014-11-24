<?php
/**
 * Created by walter371.
 * FileName: SplStack.php
 * Date: 2014/11/15
 * Time: 22:29
 * 数据结构之堆栈操作
 * http://www.imooc.com/video/2518
 */
$stack = new SplStack();
$stack->push("a");  //push操作向堆栈链表里放入一个节点到top位置，成为新的top位置
$stack->push("b");
$stack->push("c");
$stack->push("e");
print_r($stack);
echo "bottom ".$stack->bottom()."\n";
echo "top ".$stack->top()."\n";
$stack->offsetSet(0,"d");
print_r($stack);    //堆栈的offset=0是top所在的位置，offset=1是top位置节点靠近bottom位置的相邻节点，以此类推
$stack->rewind();   // 双向链表和堆栈的rewind是相反的，双向链表中rewind将指针指向bottom位置，而堆栈中讲指针指向top位置
echo "current ".$stack->current()."\n";
$stack->next(); //堆栈中的next是将指针从当前节点移动向bottom位置的下一个节点
echo "current ".$stack->current()."\n";
$stack->rewind();
//遍历堆栈
while($stack->valid()) {
    echo $stack->key() . " => " . $stack->current()."\n";
    $stack->next(); //next操作不会从链表中删除元素,prev也不会
}
//删除堆栈数据
$popObj = $stack->pop();    //pop操作将链表中的最后一个元素（top位置）提取出来，并同时在链表中删除该元素
echo "poped Object ".$popObj."\n";
print_r($stack);