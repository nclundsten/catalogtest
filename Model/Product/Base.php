<?php

namespace Catalog\Model\Product;

class Base
{
    protected $productId;
    protected $name;
    protected $description;
    protected $manufacturerId;
    protected $itemNumber;

    /**
     * @return productId
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return manufacturerId
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param $manufacturerId
     * @return self
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }

    /**
     * @return itemNumber
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * @param $itemNumber
     * @return self
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;
        return $this;
    }
}
