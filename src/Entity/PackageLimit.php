<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Evp\Component\Money\Money;
use Paysera\Component\RestClientCommon\Entity\Entity;

class PackageLimit extends Entity
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
     * @return Money
     */
    public function getPrice()
    {
        return new Money($this->get('price')['amount'], $this->get('price')['currency']);
    }
    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price)
    {
        $this->set('price', ['amount' => $price->getAmount(), 'currency' => $price->getCurrency()]);
        return $this;
    }
    /**
     * @return Money
     */
    public function getPayseraPrice()
    {
        return new Money($this->get('paysera_price')['amount'], $this->get('paysera_price')['currency']);
    }
    /**
     * @param Money $payseraPrice
     * @return $this
     */
    public function setPayseraPrice(Money $payseraPrice)
    {
        $this->set('paysera_price', ['amount' => $payseraPrice->getAmount(), 'currency' => $payseraPrice->getCurrency()]);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getExternalMerchantId()
    {
        return $this->get('external_merchant_id');
    }
    /**
     * @param string $externalMerchantId
     * @return $this
     */
    public function setExternalMerchantId($externalMerchantId)
    {
        $this->set('external_merchant_id', $externalMerchantId);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getExternalProjectId()
    {
        return $this->get('external_project_id');
    }
    /**
     * @param string $externalProjectId
     * @return $this
     */
    public function setExternalProjectId($externalProjectId)
    {
        $this->set('external_project_id', $externalProjectId);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSpecialConditionIdentifier()
    {
        return $this->get('special_condition_identifier');
    }
    /**
     * @param string $specialConditionIdentifier
     * @return $this
     */
    public function setSpecialConditionIdentifier($specialConditionIdentifier)
    {
        $this->set('special_condition_identifier', $specialConditionIdentifier);
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
    /**
     * @return WeigthIncrement|null
     */
    public function getWeightIncrement()
    {
        if ($this->get('weight_increment') === null) {
            return null;
        }
        return (new WeigthIncrement())->setDataByReference($this->getByReference('weight_increment'));
    }
    /**
     * @param WeigthIncrement $weightIncrement
     * @return $this
     */
    public function setWeightIncrement(WeigthIncrement $weightIncrement)
    {
        $this->setByReference('weight_increment', $weightIncrement->getDataByReference());
        return $this;
    }
    /**
     * @return VolumeIncrement|null
     */
    public function getVolumeIncrement()
    {
        if ($this->get('volume_increment') === null) {
            return null;
        }
        return (new VolumeIncrement())->setDataByReference($this->getByReference('volume_increment'));
    }
    /**
     * @param VolumeIncrement $volumeIncrement
     * @return $this
     */
    public function setVolumeIncrement(VolumeIncrement $volumeIncrement)
    {
        $this->setByReference('volume_increment', $volumeIncrement->getDataByReference());
        return $this;
    }
    /**
     * @return integer
     */
    public function getMaxShipmentsCount()
    {
        return $this->get('max_shipments_count');
    }
    /**
     * @param integer $maxShipmentsCount
     * @return $this
     */
    public function setMaxShipmentsCount($maxShipmentsCount)
    {
        $this->set('max_shipments_count', $maxShipmentsCount);
        return $this;
    }
    /**
     * @return string
     */
    public function getFromCountryCode()
    {
        return $this->get('from_country_code');
    }
    /**
     * @param string $fromCountryCode
     * @return $this
     */
    public function setFromCountryCode($fromCountryCode)
    {
        $this->set('from_country_code', $fromCountryCode);
        return $this;
    }
    /**
     * @return string
     */
    public function getToCountryCode()
    {
        return $this->get('to_country_code');
    }
    /**
     * @param string $toCountryCode
     * @return $this
     */
    public function setToCountryCode($toCountryCode)
    {
        $this->set('to_country_code', $toCountryCode);
        return $this;
    }
    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->get('enabled');
    }
    /**
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->set('enabled', $enabled);
        return $this;
    }
}
