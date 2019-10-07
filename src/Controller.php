<?php

namespace Webgriffe\OpenPostController;

use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;

//Magento 2.3+
abstract class Controller extends \Magento\Framework\App\Action\Action
    implements \Magento\Framework\App\CsrfAwareActionInterface {

    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        return null;
    }

    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }
}
