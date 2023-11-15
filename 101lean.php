<?php

function generateDateRange($startDate, $endDate, $interval, $dateFormat) {
    $result = [];

    $currentDate = new DateTime($startDate);
    $endDate = new DateTime($endDate);

    while ($currentDate < $endDate) {
        $dateRange = [
            $currentDate->format($dateFormat)
        ];

        $currentDate->add(new DateInterval("P{$interval}D"));
        $dateRange[] = $currentDate->format($dateFormat);

        $result[] = $dateRange;
    }

    return $result;
}

// Get user input or use defaults
echo "Enter start date (YYYY-MM-DD): ";
$startDate = trim(fgets(STDIN)) ?:null;

echo "Enter end date (YYYY-MM-DD): ";
$endDate = trim(fgets(STDIN));

if (empty($startDate) && !empty($endDate)) {
    $startDate = (new DateTime($endDate))->sub(new DateInterval("P1D"))->format('Y-m-d');

}elseif(!empty($startDate) && empty($endDate)) {
    $endDate=(new DateTime($startDate))->add(new DateInterval("P1D"))->format('Y-m-d');

}
elseif (empty($startDate) && empty($endDate)) {
    $startDate = '2023-01-01';
    $endDate = '2023-01-31';
}

echo "Enter interval (number of days): ";
$interval = trim(fgets(STDIN)) ?: 1;

echo "Enter date format (e.g., m/d/Y): ";
$dateFormat = trim(fgets(STDIN)) ?: "m/d/Y";

$result = generateDateRange($startDate, $endDate, $interval, $dateFormat);

echo "Array(\n";
foreach ($result as $dateRange) {
    echo "  \n Array(\n\t" . implode(",\n\t", $dateRange) . "\n      ),";
}
echo "\n)";
?>
