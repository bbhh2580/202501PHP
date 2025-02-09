<?php

require_once BASE_PATH . './database/db.php';

class Product
{
    private ?PDO $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM `Products`";
        $stmt = $this->conn->query($sql);

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function getProductById(int $id): mixed
    {
        $sql = "SELECT * FROM `products` WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }

    public function addProduct($name, $price, $description, $image): bool
    {
        $sql = "INSERT INTO 'products' (`name`, `price`, `description`, `image`) VALUES ('$name', '$price', '$description', '$image')";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function deleteProduct($id): bool
    {
        $sql = "DELETE FROM `products` WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function saveProduct($id, $name, $price, $description, $image): bool
    {
        $sql = "UPDATE `products` SET `name` = :name, `price` = :price, `description` = :description, `image` = :image WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}