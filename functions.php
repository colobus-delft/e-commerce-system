<?php
    function displayProducts($products) {
        echo '<h2>Products</h2>';
        echo '<ul>';
        foreach ($products as $product) {
            echo '<li>' . $product['name'] . ' - $' . $product['price'] . '</li>';
        }
        echo '</ul>';
    }
?>
