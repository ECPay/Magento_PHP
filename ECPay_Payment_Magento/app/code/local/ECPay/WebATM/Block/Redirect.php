<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_WebATM_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'webatm';
    protected $choosePayment = ECPay_PaymentMethod::WebATM;

    protected function AutoSubmit() {
        parent::AutoSubmit();
    }
}