<?php
/**
 * Created by walter371.
 * FileName: get.php
 * Date: 2014/12/8
 * Time: 17:47
 */
header('Content-type:text/html;charset=utf-8');
  class person {
      private $name;
      private $age;
      private $sex;

      public function __get($propertyName){
          echo "在直接获取私有属性值的时候，自动调用了__get()这个方法<br />";
          return isset($this->$propertyName) ? $this->$propertyName : null;
    }
      public  function  __set($propertyName,$value){
          echo "在直接设置私有属性值的时候，自动调用了这个__set()方法为私有属性赋值<br />";
          $this->$propertyName = $value;
      }
  }

$p1 = new person();
$p1->name = 'zhangsan';
echo '我的名字叫： '.$p1->name;