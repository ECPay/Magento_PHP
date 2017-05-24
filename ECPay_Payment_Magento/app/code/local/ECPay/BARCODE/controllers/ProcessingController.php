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
class ECPay_BARCODE_ProcessingController extends ECPay_ProcessingController {
    protected $paymentName = 'barcode';
    protected $newOrderStatus = Mage_Sales_Model_Order::STATE_NEW;

    protected function _generateGetCodeComment($request){
        $szPaymentType = $request['PaymentType'];
        $szTradeDate = $request['TradeDate'];
        $szBankCode = $request['PaymentNo'];
        $szExpireDate = $request['ExpireDate'];
        $szBarcode1 = $request['Barcode1'];
        $szBarcode2 = $request['Barcode2'];
        $szBarcode3 = $request['Barcode3'];

        $szComment = sprintf(Mage::helper('barcode')->__('付款方式: %s<br />付款時間: %s<br />繳費代碼: %s<br />付款截止日: %s<br />條碼第一段號碼: %s<br />條碼第二段號碼: %s<br />條碼第三段號碼: %s<br />'), $szPaymentType, $szTradeDate, $szBankCode, $szExpireDate, $szBarcode1, $szBarcode2, $szBarcode3);
        return $szComment;
    }
}