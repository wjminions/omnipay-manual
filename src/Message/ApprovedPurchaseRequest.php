<?php

namespace Omnipay\Manual\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Manual\Helper;

/**
 * Class ApprovedPurchaseRequest
 *
 * @package Omnipay\Manual\Message
 */
class ApprovedPurchaseRequest extends AbstractApprovedRequest
{

    /**
     * @return mixed
     */
    public function getData()
    {
        $this->validateData();

        $data = [];

        return $data;
    }

    private function validateData()
    {
        $this->validate();
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        return $this->response = new ApprovedPurchaseResponse($this, $data);
    }
}
