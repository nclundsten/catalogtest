<?php

namespace Catalog\Model\Product;

class Form extends Base
{
    protected $originalProductId;

    /**
     * @return originalProductId
     */
    public function getOriginalProductId()
    {
        return $this->originalProductId;
    }

    /**
     * @param $originalProductId
     * @return self
     */
    public function setOriginalProductId($originalProductId)
    {
        $this->originalProductId = $originalProductId;
        return $this;
    }
}
