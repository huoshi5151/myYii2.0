<?php
/**
 * Created by walter371.
 * FileName: FilesystemIterator.php
 * Date: 2014/11/20
 * Time: 22:35
 */
date_default_timezone_get('PRC');   //设置时区
$it = new FileSystemIterator('.');  //.表示当前目录，要表示上机目录可以用..
foreach($it as $finfo){
    printf("%s\t%s\t%8s\t%s\n",
        date('Y-m-d H:i:s',$finfo->getMTime()), //获取modified time
        $finfo->isDir() ? "<DIR>" :" ",    //判断是否是目录
        number_format($finfo->getSize()),  //获取文件大小,number_format用于将数字显示格式化，每三个加个，
        $finfo->getFileName()   //获取文件（夹）名
        );
}