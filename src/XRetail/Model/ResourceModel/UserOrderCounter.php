<?php
namespace SM\XRetail\Model\ResourceModel;
class UserOrderCounter extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sm_xretail_userordercounter','id');
    }
}
