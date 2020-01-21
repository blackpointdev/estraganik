<?php


namespace Src\Models;


class Product
{
    private $id;
    private $title;
    private $id_seller;
    private $condition;
    private $sold;
    private $price;
    private $description;
    private $thubnail_picture;

    /**
     * Product constructor.
     * @param $id
     * @param $title
     * @param $id_seller
     * @param $condition
     * @param $sold
     * @param $price
     * @param $description
     * @param $thubnail_picture
     */
    public function __construct($id, $title, $id_seller, $condition, $sold, $price, $description, $thubnail_picture)
    {
        $this->id = $id;
        $this->title = $title;
        $this->id_seller = $id_seller;
        $this->condition = $condition;
        $this->sold = $sold;
        $this->price = $price;
        $this->description = $description;
        $this->thubnail_picture = $thubnail_picture;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getIdSeller()
    {
        return $this->id_seller;
    }

    /**
     * @param mixed $id_seller
     */
    public function setIdSeller($id_seller): void
    {
        $this->id_seller = $id_seller;
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param mixed $condition
     */
    public function setCondition($condition): void
    {
        $this->condition = $condition;
    }

    /**
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param mixed $sold
     */
    public function setSold($sold): void
    {
        $this->sold = $sold;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getThubnailPicture()
    {
        return $this->thubnail_picture;
    }

    /**
     * @param mixed $thubnail_picture
     */
    public function setThubnailPicture($thubnail_picture): void
    {
        $this->thubnail_picture = $thubnail_picture;
    }


}