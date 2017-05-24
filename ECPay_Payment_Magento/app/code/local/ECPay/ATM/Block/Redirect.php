<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_ATM_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'atm';
    protected $choosePayment = ECPay_PaymentMethod::ATM;

    protected function AutoSubmit() {
        $this->sendExtend['ExpireDate'] = 3;
        $this->sendExtend['PaymentInfoURL'] = $this->_getUrl('response');

        parent::AutoSubmit();
    }
}
