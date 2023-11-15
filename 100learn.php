<?php

function generateDateRange($startDate, $endDate, $interval, $dateFormat) {
    $result = [];

    $currentDate = new DateTime($startDate);
    $endDate = new DateTime($endDate);

    while ($currentDate <= $endDate) {
        $dateRange = [
            $currentDate->format($dateFormat)
        ];

        $currentDate->add(new DateInterval("P{$interval}D"));
        $dateRange[] = $currentDate->format($dateFormat);

        $result[] = $dateRange;
    }

    return $result;
}

// Get user input
echo "Enter start date (YYYY-MM-DD): ";
$startDate = trim(fgets(STDIN));

echo "Enter end date (YYYY-MM-DD): ";
$endDate = trim(fgets(STDIN));

echo "Enter interval (number of days): ";
$interval = trim(fgets(STDIN));

echo "Enter date format (e.g., m/d/Y): ";
$dateFormat = trim(fgets(STDIN));

$result = generateDateRange($startDate, $endDate, $interval, $dateFormat);

echo "Array(\n";
foreach ($result as $dateRange) {
    echo "  \n Array(\n\t" . implode(",\n\t", $dateRange) . "\n      ),";
}
echo "\n)";
?>