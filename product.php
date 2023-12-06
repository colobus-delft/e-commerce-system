<?php
    class Product {
        public static function getAllProducts(Database $db) {
            $sql = "SELECT * FROM products";
            $result = $db->query($sql);

            $products = [];
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }

            return $products;
        }

        // Other product-related methods can be added here
    }
?>
