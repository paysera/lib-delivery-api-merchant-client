<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class SuggestedPackageLimit extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
        return $this;
    }
    /**
     * @return string
     */
    public function getShipmentGatewayCode()
    {
        return $this->get('shipment_gateway_code');
    }
    /**
     * @param string $shipmentGatewayCode
     * @return $this
     */
    public function setShipmentGatewayCode($shipmentGatewayCode)
    {
        $this->set('shipment_gateway_code', $shipmentGatewayCode);
        return $this;
    }
    /**
     * @return string
     */
    public function getShipmentMethodCode()
    {
        return $this->get('shipment_method_code');
    }
    /**
     * @param string $shipmentMethodCode
     * @return $this
     */
    public function setShipmentMethodCode($shipmentMethodCode)
    {
        $this->set('shipment_method_code', $shipmentMethodCode);
        return $this;
    }
    /**
     * @return integer
     */
    public function getMinWeight()
    {
        return $this->get('min_weight');
    }
    /**
     * @param integer $minWeight
     * @return $this
     */
    public function setMinWeight($minWeight)
    {
        $this->set('min_weight', $minWeight);
        return $this;
    }
    /**
     * @return integer
     */
    public function getMaxWeight()
    {
        return $this->get('max_weight');
    }
    /**
     * @param integer $maxWeight
     * @return $this
     */
    public function setMaxWeight($maxWeight)
    {
        $this->set('max_weight', $maxWeight);
        return $this;
    }
    /**
     * @return integer
     */
    public function getMaxWidth()
    {
        return $this->get('max_width');
    }
    /**
     * @param integer $maxWidth
     * @return $this
     */
    public function setMaxWidth($maxWidth)
    {
        $this->set('max_width', $maxWidth);
        return $this;
    }
    /**
     * @return integer
     */
    public function getMaxLength()
    {
        return $this->get('max_length');
    }
    /**
     * @param integer $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->set('max_length', $maxLength);
        return $this;
    }
    /**
     * @return integer
     */
    public function getMaxHeight()
    {
        return $this->get('max_height');
    }
    /**
     * @param integer $maxHeight
     * @return $this
     */
    public function setMaxHeight($maxHeight)
    {
        $this->set('max_height', $maxHeight);
        return $this;
    }
}
