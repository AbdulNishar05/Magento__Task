<?php
namespace Nishar\CustomRegistor\Block\Widget;

use Magento\Customer\Model\Customer as customerdata;
use Magento\Customer\Model\Session as session;
use Magento\Framework\View\Element\Template\Context as context;
use Magento\Widget\Block\BlockInterface;

class Posts extends \Magento\Framework\View\Element\Template implements BlockInterface
{

    protected $_template = "widget/posts.phtml";

    protected $customer;

    public function __construct(session $customer, context $context, customerdata $customerData, array $data = [])
    {
        $this->customer = $customer;
        $this->customerData = $customerData;
        parent::__construct($context, $data);

    }

    /**
     * Getting the Customer Type
     *
     * @return string
     */

    public function getDetail()
    {
        $customer = $this->customer->getCustomer();
        $customerID = $customer->getId();
        $customerType = $this->customerData->load($customerID);
        $customerTypeValue = $customerType->getType();
        return $customerTypeValue;

    }
}
