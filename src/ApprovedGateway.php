<?php

namespace Omnipay\Manual;

use Omnipay\Common\AbstractGateway;

/**
 * Class ApprovedGateway
 * @package Omnipay\Manual
 */
class ApprovedGateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Manual_Approved';
    }


    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Manual\Message\ApprovedPurchaseRequest', $parameters);
    }


    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Manual\Message\ApprovedCompletePurchaseRequest', $parameters);
    }
}
