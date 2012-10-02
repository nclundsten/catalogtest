<?php

namespace Catalog\Model\Product;

class Entity extends Base
{
    protected $distributor;
    protected $uoms;
    protected $images;
    protected $specs;
    protected $documents;
    protected $features;

    /**
     * @return distributor
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param $distributor
     * @return self
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return uoms
     */
    public function getUoms()
    {
        return $this->uoms;
    }

    /**
     * @param $uoms
     * @return self
     */
    public function setUoms($uoms)
    {
        $this->uoms = $uoms;
        return $this;
    }

    /**
     * @return images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param $images
     * @return self
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return specs
     */
    public function getSpecs()
    {
        return $this->specs;
    }

    /**
     * @param $specs
     * @return self
     */
    public function setSpecs($specs)
    {
        $this->specs = $specs;
        return $this;
    }

    /**
     * @return documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @return features
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param $features
     * @return self
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }
}
