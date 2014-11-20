<?php
/**
 * Created by walter371.
 * FileName: CountableIterator1.php
 * Date: 2014/11/20
 * Time: 23:14
 */
class countMe implements Countable{ //impletments用于集成接口，这里是集成Countable接口
    protected $_myCount = 3;
    public function count(){
        return $this->_myCount;
    }
}

$obj = new countMe();
echo count($obj);