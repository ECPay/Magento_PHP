<?php

require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_Block_Redirect.php');

class ECPay_Credit3_Block_Redirect extends ECPay_Block_Redirect {
    protected $paymentName = 'credit3';
    protected $choosePayment = ECPay_PaymentMethod::Credit;

    protected function AutoSubmit() {
        # Installment extension parameters
        $this->sendExtend['CreditInstallment'] = 3;
        $this->sendExtend['InstallmentAmount'] = $this->_getTotal();
        $this->sendExtend['Redeem'] = false;
        $this->sendExtend['UnionPay'] = false;

        parent::AutoSubmit();
    }
}