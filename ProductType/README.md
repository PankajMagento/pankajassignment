
### PankajAssignment ProductType 26-04-2024

### This Magento extension having below features -

1) Custom drop down attribute named ‘Product Type’ having
values ‘Standard=1’, ‘Custom=2’. Default value should be standard.

2) If the attribute value selected for product is ‘Custom’, product image
should be replaced with image from URL
https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg

3) Custom Restful API with endpoint /v1/set-product-type which
will set custom attribute value for product based on its SKU.



### Installation Steps

Step 1 : Download the Zip file from Github & Unzip it
Step 2 : Create a directory under app/code/PankajAssignment/ProductType
Step 3 : Upload the files & folders from extracted package to app/code/PankajAssignment/ProductType
Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush



### For Custom Api 

EndPoint : http://pankaj.magento.com/rest/V1/set-product-type

Method : POST

Headers:
Content-Type : application/json

Body json:-
{
    "sku": "product 1",
    "attribute_code": "product_type",
    "value": "2"
}