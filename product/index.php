<?php
// index.php - 项目入口文件，负责加载控制器和模型，并分发请求

// 自动加载控制器和模型
spl_autoload_register(function ($className) {
    // 如果控制器文件存在，则包含该文件
    if (file_exists('controllers/' . $className . '.php')) {
        include 'controllers/' . $className . '.php';
        // 如果模型文件存在，则包含该文件
    } elseif (file_exists('models/' . $className . '.php')) {
        include 'models/' . $className . '.php';
    }
});

// 获取 URL 参数，确定要调用的控制器和方法
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Product';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// 创建控制器实例并调用对应方法
$controller = new $controller . 'Controller';
$controller->{$action}();
