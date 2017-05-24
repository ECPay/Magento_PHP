<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_BARCODE_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'barcode';
    protected $choosePayment = ECPay_PaymentMethod::BARCODE;

    protected function AutoSubmit() {
        $this->sendExtend["Desc_1"] = '';
        $this->sendExtend["Desc_2"] = '';
        $this->sendExtend["Desc_3"] = '';
        $this->sendExtend["Desc_4"] = '';
        $this->sendExtend["PaymentInfoURL"] =  $this->_getUrl('response');

        parent::AutoSubmit();
    }
}