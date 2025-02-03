<?php

//  database/db.php - 数据库连接类,采用单例模式管理数据库连接

require_once '../config/config.php';

class Database {
    private $conn; // database connection
    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }
}