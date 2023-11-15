<?php

// Specify the CSV file name
$csvFileName = 'laptop2.csv';

// Fetch JSON data using cURL
$ch = curl_init('https://dummyjson.com/products/search?q=Laptop');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$jsonData = curl_exec($ch);
curl_close($ch);

// Decode JSON data
$data = json_decode($jsonData, true);

if ($data) {
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
} else {
    echo "Failed to fetch or parse JSON data.";
}

?>
