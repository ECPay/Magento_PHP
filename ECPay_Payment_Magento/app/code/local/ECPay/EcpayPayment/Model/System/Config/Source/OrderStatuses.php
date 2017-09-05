<?php

class Ecpay_EcpayPayment_Model_System_Config_Source_OrderStatuses
{
    public function toOptionArray()
    {
        $statuses = Mage::getSingleton('sales/order_config')->getStatuses();
        $options = array();
        $options[] = array(
               'value' => '',
               'label' => Mage::helper('adminhtml')->__('-- Please Select --')
            );
        foreach ($statuses as $code=>$label) {
            $options[] = array(
               'value' => $code,
               'label' => $label
            );
        }
        return $options;
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