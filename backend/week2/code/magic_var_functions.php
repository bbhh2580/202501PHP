<?php

class MagicMethods
{
    public static string $staticProperty = "静态属性"; //static property
    private static string $privateProperty = "私有属性,外部不可访问"; // private property
    public string $publicProperty;

    public function __construct($publicProperty)
    {
        $this->publicProperty = $publicProperty;
        echo "构造方法被调用 <hr>";
    }

    public function __destruct()
    {
        echo "解析方法被调用 <hr>";
    }

    public function privateMethod(): void
    {
        echo "调用了一个不可访问的的方法 <hr>"; //只能在类内部调用,外部调用会报错
    }

    public function __call($name, $arguments)
    {
        echo "调用了一个不可访问的方法 $name <hr>"; // 你调用了不存在的方法
    }

    public static function privateStaticMethod(): void
    {
        echo "调用了一个不可访问的静态方法 <hr>"; //普通不可调用静态方法,只能在类内部调用,外部调用会报错
    }

    public static function __callStatic($name, $arguments)
    {
        echo "调用了一个不可访问的静态方法 $name <hr>"; //callStatic() 处理不报错,里自定义返回信息
    }

    public function __get($name)
    {
        echo "获得了一个不可访问的属性 $name <hr>";
    }

    public function __set($name, $value)
    {
        echo "设置一个不可访问的属性 $name <hr>"; // 对不可访问的属性进行设置
    }

    public function __isset($name)
    {
        echo "对不可访问的属性调用了 isset() 或 empty() $name <hr>";
    }

    public function __unset($name)
    {
        echo "对不可访问的属性调用了 unset() $name <hr>"; //unset 清除指定变量
    }

    public function __sleep()
    {
        echo "对象被序列化之前调用 <hr>"; // 把不需要储存的东西给sleep了
    }

    public function __wakeup()
    {
        echo "对象被反序列化之前调用 <hr>"; // 例如:重新建立数据库连接,重置某些属性
    }

    public function __toString()
    {
        return "类被当成字符串时的回应方法 <hr>"; // to string 把异常对象转换为字符串
    }

    public function __invoke(): void
    {
        echo "调用一个对象时的回应方法 <hr>"; // invoke:调用,触发,执行
    }

    public function __clone()
    {
        echo "对象复制完成时调用 <hr>"; // 克隆 对象被复制时自动执行，可以有机会修改新对象的内容
    }

    public function __autoload(): void
    {
        echo "尝试未加载定义的类 <hr>"; // 自动加载，只能定义一个
    }

    public function __debugInfo()
    {
        echo "打印所需调试信息 <hr>";
    }
}

echo MagicMethods::$staticProperty . "<hr>";
MagicMethods::privateProperty();

$magicMethods = new MagicMethods('公有属性'); //public property
$magicMethods->privateMethod();
echo $magicMethods->publicProperty . "<hr>";
var_dump(isset($magicMethods->publicProperty));
echo "<hr>";

class User
{
    public function __get(string $name)
    {
        echo "这个是通过__CLASS__打印出来的当前类名：" . __CLASS__ . "<hr>";
        return "hana";
    }
}

$user = new User();
var_dump($user->name);
echo "<hr>";


//魔术变量
// __LINE__ 文件中的当前行号
// __FILE__ 文件的完整路径和文件名
// __DIR__ 文件所在的目录
// __FUNCTION__ 函数名称
// __CLASS__ 类的名称
// __TRAIT__ Trait 的名字
// __METHOD__ 类的方法名
// __NAMESPACE__ 当前命名空间的名称

echo __LINE__ . "<hr><br>";
echo __FILE__ . "<hr><br>";
echo __DIR__ . "<hr><br>";

function thisFunctionNameWillBeEcho(): void
{
    echo __FUNCTION__ . "<hr><br>";
}

thisFunctionNameWillBeEcho(); // 返回当前函数的名字

echo __NAMESPACE__ . "<hr><br>";