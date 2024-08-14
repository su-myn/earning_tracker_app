<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $homestay = $_POST["homestay"];
    $stock_market = $_POST["stock_market"];
    $total = $homestay + $stock_market;
    $timestamp = date("d/m/y ( H:i:s )");

    $data = array($timestamp, $homestay, $stock_market, $total);
    
    $file = fopen("earnings.csv", "a");
    fputcsv($file, $data);
    fclose($file);

    header("Location: index.php?status=success");
    exit();
} else {
    header("Location: index.php?status=error");
    exit();
}
?>
