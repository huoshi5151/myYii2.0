<?php
/**
 * Created by walter371.
 * FileName: CountableIterator.php
 * Date: 2014/11/20
 * Time: 23:09
 */
date_default_timezone_get("PRC");
 $array = array(
     array("name"=>"lilei","age"=>"23"),
     array("name"=>"zhangsan","age"=>"25"),
     array("name"=>"lisi","age"=>"56")
 );
echo count($array)."\n";
echo count($array[1])."\n";