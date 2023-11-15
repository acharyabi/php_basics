<?php
$products = array(
    'Home' => array(
        'Electronics & Accessories' => array(
            'items' => array(
                array(
                    'title' => 'SanDisk 256',
                    'price' => '24.45'
                ),
                array(
                    'title' => 'Jabra Wireless Headset',
                    'price' => '55.12'
                )
            )
        )
    ),
    'Accessories' => array(
        'items' => array(
            array(
                'title' => 'DJI OM 5 Smartphone Gimbal Stabilizer',
                'price' => '129.99'
            ),
            array(
                'title' => 'SAMSUNG Galaxy SmartTag',
                'price' => '30.00'
            )
        )
    )
);

function printProductDetails($products, $category = '') {
    $result = array();
    foreach ($products as $key => $value) {
        if ($key === 'items') {
            foreach ($value as $item) {
                $result[] = array(
                    'title' => $item['title'],
                    'price' => $item['price'],
                    'category' => $category,
                );
            }
        } else {
            $subCategory = $category ? "$category > $key" : $key;
            $result = array_merge($result, printProductDetails($value, $subCategory));
        }
    }

    return $result;
}

$result = printProductDetails($products);

// Display the result in the specified format
foreach ($result as $product) {
    echo "Array (\n";
    foreach ($product as $key => $value) {
        echo "\t[$key] => $value\n";
    }
    echo ")\n";
}
?>