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
<title>人工支付</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<h2 align="center">人工支付訂單已生成</h2>
</body>
</html>
eot;

        return $html;
    }
}
