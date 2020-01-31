<?php


namespace Src\Models;


class Product
{
    private $id;
    private $title;
    private $id_seller;
    private $seller;
    private $id_category;
    private $category;
    private $condition;
    private $sold;
    private $available;
    private $price;
    private $description;
    private $thumbnail_picture;
    private $sponsored;


    public function __construct(int $id,
                                string $title,
                                int $id_seller,
                                string $seller,
                                int $id_category,
                                string $category,
                                string $condition,
                                int $sold,
                                int $available,
                                float $price,
                                string $description,
                                string $thumbnail_picture,
                                int $sponsored)
    {
        $this->id = $id;
        $this->title = $title;
        $this->id_seller = $id_seller;
        $this->seller = $seller;
        $this->id_category = $id_category;
        $this->category = $category;
        $this->condition = $condition;
        $this->sold = $sold;
        $this->available = $available;
        $this->price = $price;
        $this->description = $description;
        $this->thumbnail_picture = $thumbnail_picture;
        $this->sponsored = $sponsored;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIdSeller() {
        return $this->id_seller;
    }

    public function getSeller() {
        return $this->seller;
    }

    public function getIdCategory() {
        return $this->id_category;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getCondition() {
        return $this->condition;
    }

    public function getSold() {
        return $this->sold;
    }

    public function getAvailable() {
        return $this->available;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getThumbnailPicture(){
        return $this->thumbnail_picture;
    }

    public function getSponsored() {
        return $this->sponsored;
    }
}