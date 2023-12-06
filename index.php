<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce System</title>
</head>
<body>
    <?php
        // Include necessary files
        require_once 'config.php';
        require_once 'functions.php';
        require_once 'database.php';
        require_once 'product.php';

        // Initialize the database connection
        $db = new Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Display products
        $products = Product::getAllProducts($db);
        displayProducts($products);
    ?>
</body>
</html>
