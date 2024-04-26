<?php
/**
 * @category   Technical Assessment
 * @package    PankajAssignment_ProductType
 * @author     pankaj371997@gmail.com 
 */
namespace PankajAssignment\ProductType\Plugin;

use Magento\Catalog\Model\Product;

class ProductImage
{
    public function afterSave(Product $product)
    {
        $productId = $product->getId();
        $imageSrc = $product->getData('image');
        // echo '<pre>';
        // print_r($imageSrc);
        $productType = $product->getCustomAttribute('product_type');
        $value = $productType->getValue();

        if ($productType && $value == 2) {
            $imageUrl = 'https://images.pexels.com/photos/270348/pexels-photo-270348-img.jpeg';
            $product->setImage($imageUrl);
            $product->setSmallImage($imageUrl);
            $product->setThumbnail($imageUrl);
            $product->save();
        }

        return $product;
    }
}

