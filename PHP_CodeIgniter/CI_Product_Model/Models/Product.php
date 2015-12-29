<?php

class Product extends CI_Model {
    function add_product($product)
    {
        $query = "INSERT INTO products (name, description, price, created_at) VALUES (?,?,?,?)";
        $values = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function get_all_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }
    function get_product_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
    }
    function delete_product($product_id)
    {
        return $this->db->query("DELETE FROM products WHERE id = ?", array($product_id));
    }
    function update_product($product)
    {
         return $this->db->query("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?", 
            array($product['name'], $product['description'], $product['price'], $product['id']));
    }
}

?>