<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_CVS_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'cvs';
    protected $choosePayment = ECPay_PaymentMethod::CVS;

    protected function AutoSubmit() {
        $this->endExtend["Desc_1"] = '';
        $this->endExtend["Desc_2"] = '';
        $this->endExtend["Desc_3"] = '';
        $this->endExtend["Desc_4"] = '';
        $this->endExtend["PaymentInfoURL"] =  Mage::getUrl('cvs/processing/response');

        parent::AutoSubmit();
    }
}