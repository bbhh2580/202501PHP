<?php

// php中的全局变量
$a = 9;
function test()
{
    global $a;
    echo $a;
    echo "<br>";
}
test();
// 一个脚本内同时存在类以及类外的代码的这种写法,
// 我们称之为混合编程(面向过程与面向对象的混合编程)
// * 在现在的编程中, 我们更推崇面向对象编程,
// 尤其是在使用框架的时候, 一般都是面向对象编程


// php　超全局变量
var_dump($_GET);
echo "<hr>";
var_dump($_POST);
echo "<hr>";
if ($_SERVER["REQUEST_METHOD"] === "POST") if (
    isset($_POST["name"]) &&
    $_POST['username'] === 'admin' &&
    isset($_POST['password']) &&
    $_POST['password'] === '123456'
) {
    header('Location: http://127.0.0.1/202501PHP/backend/week2/code/global-var-form.php?isLogin=true', true, 302);
} else {
    header('Location:  http://127.0.0.1/202501PHP/backend/week2/code/global_var_form.php?isLogin=false', true, 302);
}
echo "<hr>";
var_dump($_REQUEST);
echo "<br>";
$_COOKIE['is_admin'] = true;
var_dump($_COOKIE);
echo "<br>";


// session_start() 启动新会话或者重用现有会话
session_start();
$_SESSION['is_login'] = true;
var_dump($_SESSION); //变量存储 需要先用session_star() 打开
echo "<hr>";
var_dump($_FILES); // HTTP 文件上传变量
echo "<hr>";
var_dump($_SERVER); // php服务器运行环境
echo "<hr>";
var_dump($_ENV); // 环境变量