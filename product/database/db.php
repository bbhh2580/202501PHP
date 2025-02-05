<?php

//  database/db.php - 数据库连接类,采用单例模式管理数据库连接
require_once BASE_PATH . 'config/config.php';

class Database {
    private static Database|null $instance = null; // 保存类实例的静态变量
    private ?PDO $conn; // 数据库连接

    // 构造函数, privately, 防止直接创造对象
    private function __construct()
    {
        try {
            $db = new PDO("mysql:host=" . DATABASE['DB_HOST'] . ";dbname=" . DATABASE['DB_USER'], DATABASE['DB_PASS']);
            //设置PDO错误模式为异常
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $db;
        } catch (PDOException $e) {
            die ("数据库连接失败： " . $e->getMessage());
        }
    }

    // 获取类实例的公共静态方法
    public static function getInstance():?Database
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // 获取数据库连接的公共方法
    public function getConnection(): ?PDO
    {
        return $this->conn;
    }
}