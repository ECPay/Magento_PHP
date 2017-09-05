<?php

class Ecpay_EcpayPayment_Block_Form_EcpayPayment extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('ecpaypayment/form/payment.phtml');
    }
}