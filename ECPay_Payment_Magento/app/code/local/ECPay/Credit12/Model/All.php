<?php
require_once(Mage::getBaseDir('app') . '/code/local/ECPay/ECPay.Payment.Integration.php');

/**
 * ALL short summary.
 *
 * ALL description.
 *
 * @version 1.1.0316
 * @author Shawn Chang
 */
class ECPay_Credit12_Model_ALL extends Mage_Payment_Model_Method_Abstract
{
    /**
    * unique internal payment method identifier
    *
    * @var string [a-z0-9_]
    */
    protected $_code = 'credit12';
 
    /**
     * Can authorize online?
     */
    protected $_canAuthorize = true;
    
    /**
     * Can cancel invoice online?
     */
    protected $_canCancelInvoice = true;
 
    /**
     * Can capture funds online?
     */
    protected $_canCapture              = true;
 
    /**
     * Can capture partial amounts online?
     */
    protected $_canCapturePartial       = false;
    
    /**
     * Can create billing agreement online?
     */
    protected $_canCreateBillingAgreement = false;
    
    /**
     * Can fetch transaction information online?
     */
    protected $_canFetchTransactionInfo = true;
    
    /**
     * Can manage recurring profiles online?
     */
    protected $_canManageRecurringProfiles = false;
    
    /**
     * Can check order availability online?
     */     
    protected $_canOrder = true;
 
    /**
     * Can refund online?
     */
    protected $_canRefund = true;
 
    /**
     * Can refund invoice partial amount online?
     */
    protected $_canRefundInvoicePartial = true;
    
    /**
     * Can accept or deny payment online?
     */	     
    protected $_canReviewPayment = false;
 
    /**
     * Can show this payment method as an option on checkout payment page?
     */
    protected $_canUseCheckout = true;
 
    /**
     * Is this payment method suitable for multi-shipping checkout?
     */
    protected $_canUseForMultishipping  = true;
 
    /**
     * Can use this payment method in administration panel?
     */
    protected $_canUseInternal = true;
 
    /**
     * Can void transactions online?
     */
    protected $_canVoid = true;
     
    /**
     * Is this payment method a gateway (online auth/charge) ?
     */
    protected $_isGateway = true;
 
    /**
     * Can save credit installment information for future processing?
     */
    protected $_canSaveCc = false;
    
    private function _getConfigData($keyword) {
    	return Mage::getStoreConfig('payment/credit12/'.$keyword, null);
	}
	
    private $_order;

    /**
     * Get order model
     *
     * @return Mage_Sales_Model_Order
     */
    private function _getOrder() {
		if (!$this->_order) {
			$this->_order = $this->getInfoInstance()->getOrder();
		}
		return $this->_order;
    }
	
	private $_paymentType;
	
	private function _getPaymentType() {
		if (!$this->_paymentType) {
			$this->_paymentType = $this->_getOrder()->getPayment()->getCcType();
		}
		return $this->_paymentType;
	}
    
    /**
     * Can refund online?
     */
    public function canRefund() {
        $this->_canRefund = false;
        return $this->_canRefund;
    }

    public function getOrderPlaceRedirectUrl() {
		$szActionUrl = Mage::getUrl('credit12/processing/redirect');
		return $szActionUrl;
    }
    
    public function Refund(Varien_Object $payment, $amount) {
		return $this;
	}
}
