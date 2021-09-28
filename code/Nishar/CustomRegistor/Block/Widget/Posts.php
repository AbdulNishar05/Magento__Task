<?php
namespace Nishar\CustomRegistor\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Posts extends \Magento\Framework\View\Element\Template implements BlockInterface
{

    protected $_template = "widget/posts.phtml";

    protected $customer;

    public function __construct(\Magento\Customer\Model\Session $customer,Template\Context $context,\Magento\Customer\Model\Customer $customerType, array $data = []) 
    {
        $this->customer = $customer;
        $this->customerType = $customerType;
        parent::__construct($context, $data);

    }

    public function getDetail()
    {
        $customer = $this->customer->getCustomer();
        $customerID = $customer->getId();
        $customerObj = $this->customerType->load($customerID);
        $customerFirstName = $customerObj->getType();
        return $customerFirstName;

    }
}
