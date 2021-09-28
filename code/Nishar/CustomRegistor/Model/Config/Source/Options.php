<?php

namespace Nishar\CustomRegistor\Model\Config\Source;

class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [
            ['label' => __('Type One'), 'value' => 'Type One'],
            ['label' => __('Type Two'), 'value' => 'Type Two'],
        ];

        return $this->_options;

    }

}
