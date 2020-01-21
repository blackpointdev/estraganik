<?php


namespace Src\Repositories;

use PDO;
use Src\Models\Product;

class ProductRepository
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllProducts() {
        $stmt = $this->db->prepare('
            SELECT * FROM Products
        ');
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($products == false) {
            return null;
        }

        $products_array = [];

        foreach ($products as $p) {
            $stmt = $this->db->prepare('
            SELECT name, surname FROM Users WHERE id = :id_seller
        ');

            $stmt->bindParam(':id_seller', $p['id_seller']);
            $stmt->execute();
            $seller = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt = $this->db->prepare('
            SELECT name FROM Categories WHERE id = :id_category
        ');
            $stmt->bindParam(':id_seller', $p['id_category']);
            $stmt->execute();

            $category = $stmt->fetch(PDO::FETCH_ASSOC);

            $product = new Product(
                $p['id'],
                $p['title'],
                $p['id_seller'],
                $seller['name'] . ' ' . $seller['surname'],
                $p['id_category'],
                $category,
                $p['condition'],
                $p['sold'],
                $p['available'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }

    public function getProductsByCategory($id_category) {
        $stmt = $this->db->prepare('
            SELECT * FROM Products WHERE id_category = :id_category
        ');

        $stmt->bindParam(':id_category', $id_category);
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($products == false) {
            return null;
        }

        $products_array = [];

        foreach ($products as $p) {
            $stmt = $this->db->prepare('
            SELECT name, surname FROM Users WHERE id = :id_seller
        ');

            $stmt->bindParam(':id_seller', $p['id_seller']);
            $stmt->execute();
            $seller = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt = $this->db->prepare('
            SELECT name FROM Categories WHERE id = :id_category
        ');
            $stmt->bindParam(':id_category', $p['id_category']);
            $stmt->execute();

            $category = $stmt->fetch(PDO::FETCH_ASSOC);

            $product = new Product(
                $p['id'],
                $p['title'],
                $p['id_seller'],
                $seller['name'] . ' ' . $seller['surname'],
                $p['id_category'],
                $category,
                $p['condition'],
                $p['sold'],
                $p['available'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare('
            SELECT * FROM Products WHERE id = :id
        ');

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if($product == false) {
            return null;
        }

        $stmt = $this->db->prepare('
            SELECT name, surname FROM Users WHERE id = :id_seller
        ');

        $stmt->bindParam(':id_seller', $product['id_seller']);
        $stmt->execute();
        $seller = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $this->db->prepare('
            SELECT name FROM Categories WHERE id = :id_category
        ');
        $stmt->bindParam(':id_category', $product['id_category']);
        $stmt->execute();

        $category = $stmt->fetch(PDO::FETCH_ASSOC);

        $productObject = new Product(
            $product['id'],
            $product['title'],
            $product['id_seller'],
            $seller['name'] . ' ' . $seller['surname'],
            $product['id_category'],
            $category,
            $product['condition'],
            $product['sold'],
            $product['available'],
            $product['price'],
            $product['description'],
            $product['thumbnail_picture']
        );
        return $productObject;
    }
}