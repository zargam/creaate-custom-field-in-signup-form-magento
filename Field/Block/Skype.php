<?php
namespace Custom\Field\Block;
use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

class Skype extends Template
{
    protected $customerSession;

    public function __construct(
        Template\Context $context,
        Session $customerSession,
        array $data = []
    )
    {
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function getSkype() {
        return $this->customerSession->getCustomer()->getSkype();
    }
}