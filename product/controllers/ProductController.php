<?php

require_once BASE_PATH . 'models/Product.php';

class ProductController
{
    private Product $productModel;

    // 构造函数,实例化商品模型
    public function __construct()
    { var_dump(1);
        $this->productModel = new Product();
    }

    // 查询数据库中的所有产品数据，并显示在页面上
    //显示所有商品信息
    public function list(): void
    {
        // 我需要所有商品信息 信息储存在数据库中，应该去Model中获取
        $Products = $this->productModel->getAllProducts();
        //我需要把商品信息展示在页面上，要去找view要页面
        include BASE_PATH . 'views/product_list.php';
    }


    // 我需要查询数据库中的某个产品数据，并显示在页面上
    public function detail(): void
    {
        $id = $_GET['id'] ?? 0;
        $product = $this->productModel->getProductById($id);
        include BASE_PATH . 'views/product_detail.php';
    }


    //上传图片

    public function uploadImage(array $file): array
    {
        $imageUploadResult = [];
        //设置目标文件路径
        $targetFile = UPLOAD_IMAGE['UPLOAD_DIR'] . basename(uniqid());
        // 获取文件类型
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // 检查文件是否为图片
        $check = getimagesize($file['tmp_name']);
        if ($check !== false) {
            $imageUploadResult['error'] = '文件不是图片';
            $imageUploadResult['status'] = false;
            return $imageUploadResult;
        }

        //检查文件大小
        if (in_array($imageFileType, UPLOAD_IMAGE['ALLOWED_TYPES']) === false) {
            $imageUploadResult['error'] = '只允许上传 JPG, JPEG, PNG 和 GIF 格式的图片';
            $imageUploadResult['status'] = false;
            return $imageUploadResult;
        }

        // 上传文件
        if (move_uploaded_file($file['tmp_name'], $targetFile) === false) {
            $imageUploadResult['error'] = '上传图片失败';
            $imageUploadResult['status'] = false;
            return $imageUploadResult;
        }
        $imageUploadResult['status'] = true;
        $imageUploadResult['path'] = $targetFile;
        return $imageUploadResult;
    }

    // 添加商品
    public function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $price = floatval($_POST['price']);
            $description = htmlspecialchars($_POST['description']);
            $imageUploadResult = $this->uploadImage($_FILES['image']);

            if ($imageUploadResult['status'] === false) {
                echo $imageUploadResult['error'];
                return;
            }
            if ($this->productModel->addProduct(
                    $name, $price, $description, $imageUploadResult['path']
                ) === false) {
                echo '添加商品失败';
                return;
            }

            header('Location: index.php');
        } else {
            include BASE_PATH . 'views/add_product.php';
        }
    }

    // delete products
    public function delete(): void
    {
        $id = (int)$_GET['id'] ?? 0;
        $product = $this->productModel->getProductById($id);
        if ($product === null) {
            echo '商品不存在';
            return;
        }
        $image = $product['image'];
        if ($this->productModel->deleteProduct($id) === false) {
            echo '删除商品失败';
        }

        //删除图片
        unlink($image);
        header('Location: index.php');
    }

    // 更新商品 显示更新表单 update
    public function edit(): void
    {
        $id = (int)$_GET['id'] ?? 0;
        $product = $this->productModel->getProductById($id);
        if ($product === null) {
            echo '商品不存在';
            return;
        }
        include BASE_PATH . 'views/update_product.php';
    }

    //更新商品 处理更新请求
    public function save(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int)$_POST['id'];
            $name = htmlspecialchars($_POST['name']);
            $price = floatval($_POST['price']);
            $description = htmlspecialchars($_POST['description']);

            $product = $this->productModel->getProductById($id);
            if ($product === null) {
                echo '商品不存在';
                return;
            }

            if ($_FILES['image']['tmp_name'] === '') {
                $imageUploadResult = $this->uploadImage($_FILES['image']);
            } else {
                $imageUploadResult = $this->uploadImage($_FILES['image']);

                if ($imageUploadResult['status'] === false) {
                    echo $imageUploadResult['error'];
                    return;
                }

                //删除原图片
                unlink($product['image']);
            }

            if ($this->productModel->updateProduct($id, $name, $price, $description, $imageUploadResult['path']
            ) === false) {
                echo '更新商品失败';
                return;
            }
            header('Location: index.php?action=detail&id=' . $id);
        }
    }
}