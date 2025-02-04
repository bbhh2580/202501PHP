<?php

//  database/db.php - 数据库连接类,采用单例模式管理数据库连接
require_once '../config/config.php';

class Database {
    private static $instance = null; // 保存类实例的静态变量
    private $conn; // 数据库连接

    // 构造函数, privately, 防止直接创造对象
    private function __construct() {
        global $db;
        $this->conn = $db;
    }

    // 获取类实例的公共静态方法
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // 获取数据库连接的公共方法
    public function getConnection() {
        return $this->conn;
    }
}