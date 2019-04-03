<?php

namespace Omnipay\Manual\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Manual\Helper;

/**
 * Class AbstractApprovedRequest
 * @package Omnipay\Manual\Message
 */
abstract class AbstractApprovedRequest extends AbstractRequest
{
    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }
}
