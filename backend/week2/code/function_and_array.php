<?php

// function定义
function sum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

// function调用
$sum = sum(1, 2); // 3
echo $sum . "<br>";


// 匿名函数
$sum = function (int $num1, int $num2): int {
    return $num1 + $num2;
};
echo $sum(1, 2) . "<br>"; // 3


// fn() 箭头函数  有个箭头➡️
$multiply = fn(int $num1, int $num2): int => $num1 * $num2;
echo $multiply(2,3) . "<br>"; // 6


// php 数组 array
$fruits = array("apple", "banana", "raspberry");
$fruits = ["apple", "banana", "raspberry"];
$emptyArray = [];
$emptyArray = array(); // array的两种括号写法


// 关联array
$person = [
    "name" => "John",
    "age" => 25,
    "gender" => "Male"
];
$person = array(
    "name" => "John",
    "age" => 25,
    "gender" => "Male"
);  // 一样是 array 的两种括号写法;[]方括号更新


// 访问array元素
echo $fruits[0] . "<br>"; // 输出: apple


// 修改array元素
$fruits[0] = "orange";
echo $fruits[0] . "<br>"; // 输出: orange
var_dump($fruits);
echo "<br>";


// 添加array元素
$fruits[] = "apple"; // 会在array最后一个位置添加此元素
var_dump($fruits);
echo "<br>";


//
unset($fruits[0]); // 删除第0位元素
$fruits = array_values($fruits);  // array_values() 返回数组中所有的值
echo $fruits[0] . "<br>";
var_dump($fruits);
echo "<br>";
echo "<hr>";


//数组遍历
//for 循环
//isset() 检测变量是否已设置,且其值不为 null
echo "for 循环遍历数组" . "<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}
echo "<hr>";

// !!! foreach 循环 *重要* 实际开发中更常见
echo "foreach 循环遍历数组" . "<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<hr>";











