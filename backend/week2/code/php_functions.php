<?php

//计算组str的length： strlen
$username = "hana";
$usernameLength = strlen($username);
echo "The length of username is $usernameLength <br>";

echo strlen('你好') . "<br>";

// 截取str长度
$country = "Japan";
$countryShort = substr($country, 0, 2);
echo "$country short name is: $countryShort  <br>";
$str = "hello world!";
echo substr($str, 4) . "<br>";
echo substr($str, -6,5) . "<br>";

//查找字符串的位置 string position （p.s.在字符串中第一次出现的位置）
$pos = strpos($str, "world");
echo "The position of world is: $pos <br>";
var_dump(strpos($str, "ld"));
echo "<br>";
$pos = strpos($str, "world", 9);
echo "The position of world is: $pos <br>";

//大小写转换
//可以在不区分大小写的验证码时候使用
//tolower toupper
echo "HELLO WORLD! 转换成小写" . strtolower("HELLO WORLD！") . "<br>";
echo "hello world! 转换成大写" . strtoupper("hello world!") . "<br>";


//错别字替换
$replaceStr = str_replace ("world", "PHP", $str, $count);
echo "The replaced string is: $replaceStr";
echo "The replaced count is: $count <br>";


//implode（）把数组元素组合成为一个字符串
$arr = array("apple", "banana", "raspberry");
$str = implode(", ",  $arr);
echo "The  implode string is: $str <br>";


//md5（）给字符串加密
$str = "000012";
$md5Str = md5($str);
echo "The md5 of $str is: $md5Str <br>";


//explode()把字符串打散成数组
$str = "HELLO, WORLD!";
$arr = explode("E", $str,2);
var_dump($arr);
echo "<br>";


//去除字符串两端空白符号或者写明的符号
$str = "  hello world!  ";
$trimmedStr = trim($str);
echo "The trimmed string is: $trimmedStr <br>";
$str = "##hello world!*";
$trimmedStr = trim($str, "#*");
echo "The trimmed string is: $trimmedStr <br>";


//count()统计数组; ()内的所有元素数量
$arr = array(1, 2, 3, 4);
$count = count($arr);
echo "The count of array is: $count <br>";


//在数组末尾添加元素
$arr = array(1, 2, 3,);
array_push($arr, 4,);
var_dump($arr);
echo "<br>";
print_r($arr);
echo "<br>";


//弹出数组中的最后一个单元，出栈
$arr = array(1, 2, 3, 4);
$popValue = array_pop($arr);
echo "The poped value is: $popValue <br>";
//输出剩余的数组
echo "The remaining array elements are:";print_r($arr);
echo "<br>";


//删除数组中第一个元素
$arr = array(1, 2, 3, 4);
$shiftValue = array_shift($arr);
echo "The shiftValue is: $shiftValue <br>";
var_dump($arr);
echo "<br>";


//在开头插入元素(一个或多个)
$arr = array(1, 2, 3,);
array_unshift($arr, 0);
var_dump($arr);
echo "<br>";


//array_merge():合并数组 (一个或多个)
$arr1 = array(1, 2, 3);
$arr2 = array(5, 6, 7);
$mergedArr = array_merge($arr1, $arr2);
var_dump($mergedArr);
echo "<br>";

//相同的key,后面的会覆盖前面的
$student1 = array("name" => "Tom", "age" => 20);
$student2 = array("name" => "Sam", "age" => 18);
$mergedArr = array_merge($student1, $student2);
var_dump($mergedArr);
echo "<br>";


//array_unique()移除数组中重复的value  unique:独一无二的
$arr = array(1, 2, 3, 3, 4, 5, 5);
$uniqueArr = array_unique($arr);
var_dump($uniqueArr);
echo "<br>";


//array_reverse():返回单元数据相反的数组  reverse：逆转
$arr = array(1, 2, 3, 4, 5);
$reverseArr = array_reverse($arr);
var_dump($reverseArr);
echo "<br>";


//sort 升序排列
$arr = array(5, 7, 2, 3, 1);
sort($arr);
var_dump($arr);
echo "<br>";
//rsort 降序排列
rsort($arr);
var_dump($arr);
echo "<br>";


//将数组顺序打乱; 刷新网页可重新打乱
$arr = array(1, 2, 3, 4, 5);
shuffle($arr);
print_r($arr);
echo "<br>";


//array_sum 计算数组中所有值的和
$arr = array(1, 2, 3, 4, 5);
$sum  = array_sum($arr);
echo "The sum of array is: $sum <br>";


//检查数组里是否有指定的key名或索引
$student = array("name" => "Tom", "age" => 20);
if (array_key_exists("name", $student)) {
    echo "The key name exists in array <br>";
} else {
    echo "The key name is not exists in array <br>";
}


//









