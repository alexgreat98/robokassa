<?php

namespace Idma\Robokassa\Exception;

/**
 * Class InvalidSumCurrencyException
 *
 * @package Idma\Robokassa\Exception
 */
class InvalidSumCurrencyException extends PaymentException
{
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct('Invoice sum currency must be USD, EUR or KZT.', $code, $previous);
    }
}
