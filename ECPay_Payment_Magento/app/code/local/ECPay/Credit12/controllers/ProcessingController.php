<?php
require_once(Mage::getBaseDir('app') . '/code/local/ECPay/Foundation/ECPay_ProcessingController.php');

/**
 * ProcessingController short summary.
 *
 * ProcessingController description.
 *
 * @version 1.1.0316
 * @author Shawn Chang
 */
class ECPay_Credit12_ProcessingController extends ECPay_ProcessingController {
    protected $paymentName = 'credit12';
    protected $newOrderStatus = Mage_Sales_Model_Order::STATE_PENDING_PAYMENT;
}