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

            $product = new Product(
                $p['id'],
                $p['title'],
                $seller['name'] . ' ' . $seller['surname'],
                $p['condition'],
                $p['sold'],
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

            $product = new Product(
                $p['id'],
                $p['title'],
                $seller['name'] . ' ' . $seller['surname'],
                $p['condition'],
                $p['sold'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }
}