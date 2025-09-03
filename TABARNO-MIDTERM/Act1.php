<?php 
// Activity 1: Gadget Grove Catalog with Arrays.

$productNames = ["Wireless Mosuse", "Mechanical Keybaord", "USB-C Hub", "Portable Speaker"];
$productPrices = [27.99, 79.99, 34.50, 45.99];

//Displaying all the product names.
echo "Product Names: ". implode (",", $productNames)."\n";

//The First Product Price.
echo "First Product Produce: ₱" .$productPrices[0] . "\n";

//The Last Product Price.
$lastIndex = count($productPrices) - 1;
echo "Last Product Price: ₱" .$productPrices[$lastIndex] . "\n\n";

//The Detailed Product View.
$keyboard = [
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "brand" => "KeyTech",
    "inStock" => true,
    "description"  => "A durable mechanical keyboard with RGB lighting."
];

// I added new key: warranty.
$keyboard["warranty"] = "2 Years";

echo "Product: ".$keyboard["name"]. "\n";
echo "Brand: ".$keyboard["brand"]. "\n";
echo "Price: ₱". $keyboard["price"]. "\n";
echo "In Stock: ". $keyboard["inStock"]. "\n";
echo "Warranty: ". $keyboard["warranty"]. "\n\n";

//This is the full catalog.
$catalog = [
[
    "id" => 1,
    "name" => "Wireless Mouse",
    "price" => 27.99,
    "inStock" => true
],
[
    "id" => 2,
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "inStock" => true
],
[
    "id" => 3,
    "name" => "USB-C Hub",
    "price" => 34.50,
    "inStock" => false
],
[
    "id" => 4,
    "name" => "Portable Speaker",
    "price" => 45.99,
    "inStock" => true
]
];

echo "~~~FULL CATALOG~~~\n";
foreach ($catalog as $product) {
    echo "Product: ". $product["name"]. " - Price: ₱". $product["price"]. "\n";
}
?> 