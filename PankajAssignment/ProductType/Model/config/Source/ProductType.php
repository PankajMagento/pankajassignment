<?php
namespace PankajAssignment\ProductType\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ProductType extends AbstractSource
{
    public function getAllOptions()
    {
        return [
            ['value' => '1', 'label' => __('Standard')],
            ['value' => '2', 'label' => __('Custom')]
        ];
    }
}