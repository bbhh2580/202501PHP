<?php

$name = '张三'; // 字符串
$age = 18; // 整数

echo $name . "今年 $age 岁了";

$height = 1.75;
$isLogin = true;
$score = [100, 60, 80];
$person = ['name' => $name, 'age' => $age, 'height' => $height];
echo $person['name'];
$obj = new stdClass();

/**
 * @method addScore(int $int)
 */
class Student
{
    public string $name; //公共访问
    public int $age; //公共访问
    protected string $gender; //仅限类的内部和子类访问
    private array $scores = []; // 惊现类的内部


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$student = new Student($name, $age,);
echo $student->name;
echo "<br>";

$student->addScore(80);
$student->addScore(90);

var_dump($student->getScore());
$scoresTest = [80, 90];
echo "<br>";
echo "<h3>这是用php的echo来输出html标签</h3>";
var_dump($scoresTest);
echo "<br>";
echo "这是用print_r() 方法来输出的数组" . "\r\n";
print_r($scoresTest);

//php运算符
$numA = 10;
$numB = 20;
$sum = $numA + $numB;
$difference = $sum - $numA;
$product = $sum * $numB;
$quotient = $sum / $numB;
$remainder = $sum % $numB;
echo "<br>";
var_dump($difference);

//比较运算符
//(10 == 10);
//(5 == "5");
//(10 === 10);
//(5 === "5");
//(10 != 10);
//(10 !== 10);
//(10 > 10) //false
//(10 < 10) //false
//(10 >= 10) //true
//(10 <= 10) //true

//逻辑运算符
// ($numA > 5 && $numB < 5); //true both to
// ($numA > 5 || $numB < 5); // true 两个中满足一个即可
// ！（$numA > 5); // false //假设 $numA = 10; // $numA 的值为 10 取反后结果为false

//三元运算符
$newAIsGreater = $numA > 5 ? '大于 5' : '小于等于 5';
$studentAge = $student->age ?? 0;

//流程控制
if ($numA > 5) {
    echo "大于 5";
} elseif ($numA === 5) {
    echo "等于 5";
} else {
    echo "小于 5";
}

//for 循环
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}

//while 循环
echo "<br>";
echo "<hr>";
$count = 0;
while ($count < 5) {
    echo $count;
    echo "<br>";
    $count++;
}

//foreach 循环 ！！！***重要***
echo "<br>";
echo "<hr>";
$students = [
    ['name' => 'jake', 'age' => 20],
    ['name' => 'john', 'age' => 19],
    ['name' => 'jack', 'age' => 30],
];
foreach ($students as $student) {
    echo 'this is $student :';
    var_dump($student);
    echo '<br>';
    echo $student['name'] . 'now' . $student['age'] . 'years old';
    echo '<br>';
}

echo "<br>";
echo "<hr>";
$studentA = [
    ['name' => 'jake', 'age' => 20],
    'scores' => ["japanese: 80", "math: 90", "chemistry: 100"]
];

foreach ($studentA as $key => $value) {
    echo 'this is $key :';
    var_dump($key);
    echo '<br>';
    echo 'this is $value :';
    var_dump($value);
    echo '<br>';
}

// is_array()  函数用于检查变量是否是数组
echo "<hr>";
echo "姓名：" . $studentA['name'];
echo "<br>";
echo "age:" . $studentA['age'];
echo "<br>";
echo "<ul>";
foreach ($studentA as $key => $value) {
    if ($key === 'scores' && is_array($value) && count($value) > 0) {
        foreach ($value as $score) {
            echo "<li>$score</li>";
        }
    }
}
echo "</ul>";




