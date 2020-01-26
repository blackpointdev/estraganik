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
            SELECT 
                   p.*, u.name, u.surname, c.name as category_name
            FROM 
                 Products p
            INNER JOIN Users u
                on p.id_seller = u.id
            INNER JOIN Categories c 
                on p.id_category = c.id
        ');
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($products == false) {
            return null;
        }

        $products_array = [];

        foreach ($products as $p) {
            $product = new Product(
                $p['id'],
                $p['title'],
                $p['id_seller'],
                $p['name'] . ' ' . $p['surname'],
                $p['id_category'],
                $p['category_name'],
                $p['condition'],
                $p['sold'],
                $p['available'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture'],
                $p['sponsored']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }

    public function getProductsByCategory($id_category) {
        $stmt = $this->db->prepare('
            SELECT 
                   p.*, u.name, u.surname, c.name as category_name
            FROM 
                 Products p
            INNER JOIN Users u
                on p.id_seller = u.id
            INNER JOIN Categories c 
                on p.id_category = c.id
            WHERE 
                  id_category = :id_category
        ');

        $stmt->bindParam(':id_category', $id_category);
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($products == false) {
            return null;
        }

        $products_array = [];

        foreach ($products as $p) {
            $product = new Product(
                $p['id'],
                $p['title'],
                $p['id_seller'],
                $p['name'] . ' ' . $p['surname'],
                $p['id_category'],
                $p['category_name'],
                $p['condition'],
                $p['sold'],
                $p['available'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture'],
                $p['sponsored']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare('
            SELECT 
                   p.*, u.name, u.surname, c.name as category_name
            FROM 
                 Products p
            INNER JOIN Users u
                on p.id_seller = u.id
            INNER JOIN Categories c 
                on p.id_category = c.id
            WHERE 
                  p.id = :id
        ');

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if($product == false) {
            return null;
        }

        return new Product(
            $product['id'],
            $product['title'],
            $product['id_seller'],
            $product['name'] . ' ' . $product['surname'],
            $product['id_category'],
            $product['category_name'],
            $product['condition'],
            $product['sold'],
            $product['available'],
            $product['price'],
            $product['description'],
            $product['thumbnail_picture'],
            $product['sponsored']
        );
    }

    public function getSponsoredProducts() {
        $stmt = $this->db->prepare('
            SELECT 
                   p.*, u.name, u.surname, c.name as category_name
            FROM 
                 Products p
            INNER JOIN Users u
                on p.id_seller = u.id
            INNER JOIN Categories c 
                on p.id_category = c.id
            WHERE 
                  p.sponsored = 1;
        ');
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($products == false) {
            return null;
        }

        $products_array = [];

        foreach ($products as $p) {
            $product = new Product(
                $p['id'],
                $p['title'],
                $p['id_seller'],
                $p['name'] . ' ' . $p['surname'],
                $p['id_category'],
                $p['category_name'],
                $p['condition'],
                $p['sold'],
                $p['available'],
                $p['price'],
                $p['description'],
                $p['thumbnail_picture'],
                $p['sponsored']
            );
            $products_array[]= $product;
        }

        return $products_array;
    }
}