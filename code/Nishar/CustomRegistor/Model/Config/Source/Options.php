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
            ['label' => __('Type One'), 'value' => '0'],
            ['label' => __('Type Two'), 'value' => '1'],
        ];

        return $this->_options;

    }

}
