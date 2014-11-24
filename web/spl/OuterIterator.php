<?php
/**
 * Created by walter371.
 * FileName: OuterIterator.php
 * Date: 2014/11/20
 * Time: 23:30
 * http://www.imooc.com/video/2616
 */
date_default_timezone_get("PRC");
$array=['value1','value2','value3'];
$outImpl = new outerImpl(new ArrayIterator($array));
foreach($outImpl as $key=>$value){
    echo "++".$key." - ".$value."\n";
}
class outerImpl extends IteratorIterator{
    public function current(){  // 重写IteratorIterator中的current()方法
        return parent::current()."_tail";
    }
    public function  key(){
        return 'pre_'.parent::key();
    }
}