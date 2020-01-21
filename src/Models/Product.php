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

    /**
     * Product constructor.
     * @param $id
     * @param $title
     * @param $id_seller
     * @param $seller
     * @param $id_category
     * @param $category
     * @param $condition
     * @param $sold
     * @param $available
     * @param $price
     * @param $description
     * @param $thumbnail_picture
     */
    public function __construct($id, $title, $id_seller, $seller, $id_category, $category, $condition, $sold, $available, $price, $description, $thumbnail_picture)
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
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getIdSeller()
    {
        return $this->id_seller;
    }

    /**
     * @return mixed
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getThumbnailPicture()
    {
        return $this->thumbnail_picture;
    }

}