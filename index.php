<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Earnings for Today</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>My Earnings for Today</h1>
        <p class="timestamp"><?php echo date("d/m/y ( H:i:s )"); ?></p>
        
        <form action="save_data.php" method="post">
            <div class="form-group">
                <label for="homestay">Homestay:</label>
                <input type="number" id="homestay" name="homestay" required onchange="calculateTotal()">
            </div>
            
            <div class="form-group">
                <label for="stock_market">Stock Market:</label>
                <input type="number" id="stock_market" name="stock_market" required onchange="calculateTotal()">
            </div>
            
            <div class="form-group">
                <label for="total">Sum of above 2 fields:</label>
                <span id="total">$0.00</span>
            </div>
            
            <button type="submit" class="submit-btn">Save and Submit</button>
        </form>
    </div>

    <script>
        function calculateTotal() {
            const homestay = parseFloat(document.getElementById('homestay').value) || 0;
            const stockMarket = parseFloat(document.getElementById('stock_market').value) || 0;
            const total = homestay + stockMarket;
            document.getElementById('total').textContent = '$' + total.toFixed(2);
        }
    </script>
</body>
</html>
