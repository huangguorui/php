<?php
 function newName(){
        //获取时间戳
        $name = time();
        //array_merge整合数组，range,随机生成新数组
        $arr = array_merge(range('a', 'z'),range('A', 'Z'),range(0,9));
        //再次打乱数组的排序
        shuffle($arr);
        //随机拼接数组
        $name .= $arr[0] .$arr[1] .$arr[2] .$arr[8] .$arr[7];
        //返回数组
        return $name;
    }
//调用函数
echo newName();

 ?>


 ?>