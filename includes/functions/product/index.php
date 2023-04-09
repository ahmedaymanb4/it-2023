<?php

/*

Name: find()
Description: This function will find all products in the database
Parameters: $conn (object)
version: 1.0

*/

function find($conn) {
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

/*

Name: search()
Description: This function will search for a product in the database
Parameters: $conn (object), $item (string)
version: 1.0

*/

function search($conn, $product) {
    if(strlen($product) < 3) {
        return false;
    }
    $filteredProduct = filter_var ( $product, FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM products WHERE name LIKE '%". $filteredProduct ."%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function findOne() {

}

function insert() {
    
}

function update() {
    
}

function delete() {
    
}

?>