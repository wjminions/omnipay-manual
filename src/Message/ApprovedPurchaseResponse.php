<?php

namespace Omnipay\Manual\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Manual\Helper;

/**
 * Class ApprovedPurchaseResponse
 * @package Omnipay\Manual\Message
 */
class ApprovedPurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{

    public function isSuccessful()
    {
        return true;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return false;
    }

    public function getRedirectMethod()
    {
        return 'POST';
    }

    public function getRedirectData()
    {
        return false;
    }

    public function getMessage()
    {
        return $this->data;
    }

    public function getRedirectHtml()
    {
        $html = <<<eot
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
</head>

<body>
<p style="text-align:center;">
    <img src="https://c.ap1.content.force.com/servlet/servlet.ImageServer?id=01590000008h62j&oid=00D90000000sUDO" alt="Main Order Home Page"/>
</p>

<br><br><br><br>

<h1 align="center"> Please Wait for a moment</h1>

<h2 align="center"><u>Order Summary</u></h2>

<p style="text-align:center;"><strong> Order Amount : {$order_amount}</p>

<p style="text-align:center;">
    Currency&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {$order_currency}</strong> </p>
<br>

</body>
</html>
eot;

        return $html;
    }
}
