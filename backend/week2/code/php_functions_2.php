<?php

// intval() 获取变量的整数值; integer value:整数值
$strNum = "123.45";
var_dump($strNum);
echo "<br>";
$num = intval($strNum);
var_dump($num);
echo "<br>";
$num = (int)$strNum;
var_dump($num);
echo "<br>";


// floatval() 获取变量的浮点值; float value:浮点值
$num = floatval($strNum);
var_dump($num);
echo "<br>";


// boolval() 获取变量的布尔值
$isTrue = 8;
$isFalse = 0;
$bool = boolval($isTrue);
var_dump($bool);
echo "<br>";


// serialize() 生成值的可存储表示 序列化
$user = [
    "name" => "John",
    "age" => 20,
    "isAdmin" => true
];
$userStr = serialize($user);
var_dump($userStr);
echo "<br>";

// unserialize() 从已存储的表示中创建 PHP 的值 反序列化
$user = unserialize($userStr);
var_dump($user);
echo "<br>";


// urlencode() 编码 URL 字符串; encode:把...编成密码
$url = "http://www.baidu.com";
$url = urlencode($url);
var_dump($url);
echo "<br>";

// urldecode() 解码已编码的 URL 字符串
$url = urldecode($url);
var_dump($url);
echo "<br>";


// parse_url() 解析 URL,返回其组成部分; component:组成部分
//	$component（可选）：指定解析的部分：
//	PHP_URL_SCHEME：返回协议部分（如 http）。
//	PHP_URL_HOST：返回主机部分（如 www.baidu.com）。
//	PHP_URL_PATH：返回路径部分（如 /path/to/page）。
//	PHP_URL_QUERY：返回查询字符串部分（如 a=1&b=2）。
//	如果不指定 $component，返回一个数组，包含所有部分。
$url = "http://www.baidu.com";
$urlArr = parse_url($url, PHP_URL_HOST);
var_dump($urlArr);
echo "<br>";


// http_build_query() 生成 URL-encode 之后的请求字符串
$data = [
    "text" => "你好宇宙人",
    "lang" => ["ja"]
];
$queryStr = http_build_query($data);
var_dump($queryStr);
echo "<br>";


//is_array() 检测变量是否是数组
$arr = [1, 2, 3];
$isArray = is_array($arr);
var_dump($isArray);
echo "<br>";
echo "<hr>";


// ** 要注意！ ** //
// empty() 检查变量是否为空
$var1 = "";
$var2 = "hello";
$var3 = 0;
var_dump(empty($var1));
echo "<br>";
var_dump(empty($var2));
echo "<br>";
var_dump(empty($var3));
echo "<br>";
echo "<hr>";


// isset() 检测变量是否已设置,并且其值不为null
$var4 = null;
var_dump(isset($var1));
echo "<br>";
var_dump(isset($var2));
echo "<br>";
var_dump(isset($var3));
echo "<br>";
var_dump(isset($var4));
echo "<br>";

class Country
{
    public string $name;

    public function __construct()
    {
        $this->name = "japan";
    }
}

$country = new Country();
var_dump(isset($country->name));
echo "<br>";
echo "<hr>";

// is_null() 检测变量是否是 null
var_dump(is_null($var4));
echo "<br>";


//使用场景对比
// empty(): 常用于表单验证，检查输入是否为空。
// isset(): 常用于检查表单提交的字段，确保变量存在。
// is_null(): 常用于数据库查询结果验证，检查变量是否为 null。

// 使用 empty() 可以检查变量是否为空，包括 0、""、null、false 等。
// 使用 isset() 可以确保变量已设置且不为 null。
// 使用 is_null() 可以明确检查变量是否为 null。