<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_Credit_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'credit';
    protected $choosePayment = ECPay_PaymentMethod::Credit;

    protected function AutoSubmit() {
        parent::AutoSubmit();
    }
}