<?php

namespace App\Models;

class Product
{
    private $imagePath;
    private $name;
    private $productionTime;
    private $price;

    public function __construct($imagePath, $name, $productionTime, $price)
    {
        $this->setImagePath($imagePath);
        $this->setName($name);
        $this->setProductionTime($productionTime);
        $this->setPrice($price);
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getProductionTime()
    {
        return $this->productionTime;
    }

    public function setProductionTime($productionTime)
    {
        $this->productionTime = $productionTime;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
