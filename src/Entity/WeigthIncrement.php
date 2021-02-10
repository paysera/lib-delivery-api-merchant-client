<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Evp\Component\Money\Money;
use Paysera\Component\RestClientCommon\Entity\Entity;

class WeigthIncrement extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return integer
     */
    public function getWeight()
    {
        return $this->get('weight');
    }
    /**
     * @param integer $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->set('weight', $weight);
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
}
