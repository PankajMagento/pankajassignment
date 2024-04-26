<?php
/**
 * @category   Technical Assessment
 * @package    PankajAssignment_ProductType
 * @author     pankaj371997@gmail.com 
 */

namespace PankajAssignment\ProductType\Model;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use PankajAssignment\ProductType\Api\ProductTypeManagementInterface;

class ProductTypeManagement implements ProductTypeManagementInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;
    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    
    public function setProductType(string $sku, string $attributeCode, string $value): array
    {
        try {
            $product = $this->productRepository->get($sku);
            $product->setCustomAttribute($attributeCode, $value);
            $this->productRepository->save($product);
            
            return [
                'success' => true,
                'message' => 'Product type has been set successfully.'
            ];
        } catch (NoSuchEntityException $e) {
            return [
                'success' => false,
                'message' => 'Product with SKU ' . $sku . ' does not exist.'
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

}


