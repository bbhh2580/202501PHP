<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 预设的用户名和密码
    $valid_users = [
        $username => "admin",
        $password => "12345"
    ];

    // 判空
    if ($username === "" || $password === "") {
        echo "<script> alert('Please enter your username and password'); href='form.html';</script>";
        exit;
    }

    // 验证用户名和密码
    if (!isset($valid_users[$username])) {
        echo "<script> alert('Invalid username'); href='form.html';</script>";
        exit;
    }
    if ($valid_users[$password] !== $password){
        echo "<script> alert('Invalid password'); href='form.html';</script>";
        exit;
    }


}