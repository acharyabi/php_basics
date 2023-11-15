<?php

// Fetch JSON data from the URL
$jsonData = file_get_contents('https://dummyjson.com/products/search?q=Laptop');

// Decode JSON data
$data = json_decode($jsonData, true);

// Specify the CSV file name
$csvFileName = 'laptop1.csv';

// Open the CSV file for writing
$file = fopen($csvFileName, 'w');

// Write the header row
fputcsv($file, ['Title', 'Price', 'Brand']);

// Write data to the CSV file
foreach ($data['products'] as $product) {
    $title = $product['title'];
    $price = $product['price'];
    $brand = $product['brand'];

    // Write a row to the CSV file
    fputcsv($file, [$title, $price, $brand]);
}

// Close the CSV file
fclose($file);

echo "CSV file '$csvFileName' has been created.";

?>
