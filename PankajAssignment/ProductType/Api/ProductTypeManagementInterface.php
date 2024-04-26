<?php
/**
 * @category   Technical Assessment
 * @package    PankajAssignment_ProductType
 * @author     pankaj371997@gmail.com 
 */
namespace PankajAssignment\ProductType\Api;

interface ProductTypeManagementInterface
{
    public function setProductType(string $sku, string $attributeCode, string $value): array;
}
