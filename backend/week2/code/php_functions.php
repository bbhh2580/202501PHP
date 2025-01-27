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
echo substr($str, -6, 5) . "<br>";

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
$replaceStr = str_replace("world", "PHP", $str, $count);
echo "The replaced string is: $replaceStr";
echo "The replaced count is: $count <br>";


//implode（）把数组元素组合成为一个字符串
$arr = array("apple", "banana", "raspberry");
$str = implode(", ", $arr);
echo "The  implode string is: $str <br>";


//md5（）给字符串加密
$str = "000012";
$md5Str = md5($str);
echo "The md5 of $str is: $md5Str <br>";


//explode()把字符串打散成数组
$str = "HELLO, WORLD!";
$arr = explode("E", $str, 2);
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
array_push($arr, 4);
var_dump($arr);
echo "<br>";
print_r($arr);
echo "<br>";


//弹出数组中的最后一个单元，出栈
$arr = array(1, 2, 3, 4);
$popValue = array_pop($arr);
echo "The poped value is: $popValue <br>";
//输出剩余的数组
echo "The remaining array elements are:";
print_r($arr);
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
$sum = array_sum($arr);
echo "The sum of array is: $sum <br>";


//array_key_exists()检查数组里是否有指定的key名或索引
$student = array("name" => "Tom", "age" => 20);
if (array_key_exists("name", $student)) {
    echo "The key name exists in array <br>";
} else {
    echo "The key name is not exists in array <br>";
}


//in_array()检查数组中是否存在某个值
$arr = array(1, 2, 3, 4, 5);
if (in_array(8, $arr)) {
    echo "The value 3 exists in array <br>";
} else {
    echo "The value 3 is not exists in array <br>";
}
var_dump(in_array(7, $arr));
echo "<br>";


//array_search()在数组中搜索给定的值，如果成功则返回首个相应的键名
$arr = array(1, 2, 3, 4, 5);
$key = array_search(2, $arr);
echo "The key of value 2 is: $key <br>";


//array_keys()返回数组中部分的或所有的键名
$arr = array("a" => 1, "b" => 2, "c" => 3);
$keys = array_keys($arr);
var_dump($keys);
echo "<br>";


//array_values():返回数组中所有的值
$arr = array("a" => 1, "b" => 2, "c" => 3);
$values = array_values($arr);
var_dump($values);
print_r($values);
echo "<br>";


//array_slice()从数组中取出一段;  slice:切片
$arr = array("a", "b", "c");
$sliceArr = array_slice($arr, 0, 2);
var_dump($sliceArr);
echo "<br>";


//**文件处理函数**
$content = file_get_contents("test.txt");
echo "The content of file is: $content <br>";

//如果文件不存在，则会创建一个; p.s. php需要有写入文件的权限
$data = "Hello world!";
file_put_contents("test_1.txt", $data, FILE_APPEND);
//FILE_APPEND;将内容追加到文件末尾; append：追加，附加，增补


//file_exists() 函数检查文件目录是否存在; exists: 存在
if (file_exists("test_1.txt")) {
    echo "The file exists <br>";
} else {
    echo "The file is not exists <br>";
}

//unlink() 删除文件
$file = "test_3.txt";
if (file_exists($file)) {
    if (unlink($file)) {
        echo "File '$file' has been deleted. <br>";
    } else {
        echo "Failed to delete '$file'. <br>";
    }
} else {
    echo "File '$file' does not exist.<br>";
}


//mkdir() 新建目录 dir=directory:目录
$dir = "test_3.dir";
if (!file_exists($dir)) {
    if (mkdir($dir)) {
        echo "The directory '$dir' has been created. <br>";
    } else {
        echo "Failed to create the directory '$dir'. <br>";
    }
}


//rmdir() 删除目录 remove directory:移除目录
$dir = "test_3.dir";
//is_dir() 判断给定文件名是否是一个目录
if (is_dir($dir)) {
    if (rmdir($dir)) {
        echo "The directory '$dir' has been deleted. <br>";
    } else {
        echo "Failed to delete the directory '$dir'. <br>";
    }
}


// chmod() 更改文件属性 change mode:更改模式
$file = "test_4.txt";
if (chmod($file, 0666)) {
    echo "The file '$file' has been changed. <br>";
} else {
    echo "The file '$file' does not exist. <br>";
}


//日期与时间函数 date
echo date("Y-m-d H:i:s") . "<br>";


//返回当前的 Unix 时间戳
//时间戳:从 1970 年 1 月 1 日 00:00:00 UTC 到现在的秒数
echo time() . "<br>";


//将任何英文文本日期时间描述解析为 Unix 时间戳
$timestamp = strtotime("+1 day");
echo "The timestamp is $timestamp <br>";
echo date("Y-m-d H:i:s", $timestamp);
echo "<br>";


//JSON 处理函数
//avaScript Object Notation 的缩写，意思是 JavaScript 对象表示法
//JSON 数据由键值对（key-value）的形式表示，结构简单且易于阅读和解析。
//json_encode() 对变量进行 JSON 编码
$arr = array("name" => "Tom", "age" => 20);
$json = json_encode($arr);
echo "The json string is: $json <br>";


//json_decode() 对 JSON 格式的字符串进行解码
$json = '{"name": "Tom", "age": 20}';
$arr = json_decode($json, true);
var_dump($arr);
echo "<br>";


//数学函数
//abs() 绝对值
echo abs(-6.7) . "<br>";

//ceil() 进一法取整  ceil:装天花板，抹天花板
echo ceil(2.30) . "<br>";

//floor() 舍去法取整 与ceil相反
echo floor(2.80) . "<br>";

//max() 找出最大值
echo max(0,20,90,70,-22,-200) . "<br>";

//min() 找出最小值
echo min(0,20,90,70,-22,-200) . "<br>";

//rand() 产生一个随机整数  rand:随机的
echo rand(1,100) . "<br>";
echo rand() . "<br>";

//round() 对浮点数进行四舍五入
echo round(0.30) . "<br>";

//sqrt() 平方根  sqrt = square root:开平方根; root:根
echo sqrt(81) . "<br>";


//var_dump(); 打印变量的相关信息
//print_r(); 打印人类可读的变量信息
//debug_backtrace(); 产生一条回溯跟踪(backtrace)
//debug:调试,除错； backtrace:回溯

