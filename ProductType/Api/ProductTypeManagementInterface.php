<?php
/**
 * @category   Technical Assessment
 * @package    PankajAssignment_ProductType
 * @author     pankaj371997@gmail.com 
 */
namespace PankajAssignment\ProductType\Api;

interface ProductTypeManagementInterface
{
    /**
     * Set custom attribute dropdown value for a product based on its SKU
     *
     * @param string $sku
     * @param string $attributeCode
     * @param string $value
     * @return array
     */
    public function setProductType(string $sku, string $attributeCode, string $value): array;
}
