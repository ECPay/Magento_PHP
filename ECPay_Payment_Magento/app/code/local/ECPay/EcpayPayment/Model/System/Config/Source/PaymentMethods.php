<?php

class Ecpay_EcpayPayment_Model_System_Config_Source_PaymentMethods
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'credit', 'label' => '信用卡(一次付清)'),
            array('value' => 'credit_3', 'label' => '信用卡(3期)'),
            array('value' => 'credit_6', 'label' => '信用卡(6期)'),
            array('value' => 'credit_12', 'label' => '信用卡(12期)'),
            array('value' => 'credit_18', 'label' => '信用卡(18期)'),
            array('value' => 'credit_24', 'label' => '信用卡(24期)'),
            array('value' => 'webatm', 'label' => '網路ATM'),
            array('value' => 'atm', 'label' => 'ATM'),
            array('value' => 'barcode', 'label' => '超商條碼'),
            array('value' => 'cvs', 'label' => '超商代碼'),
        );
    }
}



// class YourNamespace_YourModule_Model_System_Config_Source_View 
// {
//     /**
//      * Options getter
//      *
//      * @return array
//      */
//     public function toOptionArray()
//     {
//         return array(
//             array('value' => 0, 'label' => Mage::helper('adminhtml')->__('Data1')),
//             array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Data2')),
//             array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Data3')),
//         );
//     }

//     /**
//      * Get options in "key-value" format
//      *
//      * @return array
//      */
//     public function toArray()
//     {
//         return array(
//             0 => Mage::helper('adminhtml')->__('Data1'),
//             1 => Mage::helper('adminhtml')->__('Data2'),
//             3 => Mage::helper('adminhtml')->__('Data3'),
//         );
//     }
// }