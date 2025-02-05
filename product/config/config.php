<?php

// config/config.php - 数据库配置文件,定义数据库连接参数

// 定义数据库主机;
const DB_HOST = 'localhost';
// 定义数据库名称;
const DB_USER = 'root';
// 定义数据库用户名;
const DB_PASS = '';
// 定义数据库密码;
const DB_NAME = '';

// 链接数据库;
const DATABASE = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'product_db',
    'DB_USER' => 'root',
    'DB_PASS' => '',
];

const UPLOAD_IMAGE = array(
    'ALLOWED_TYPES' => array('png', 'jpg', 'gif', 'jpeg'), // 允许上传的图片类型
    'MAX_SIZE' => 800000, // 允许上传的图片最大尺寸 800KB
    'UPLOAD_DIR' => './Library/WebServer/Documents/php/202501PHP/frontend', // 上传文件的目录
);