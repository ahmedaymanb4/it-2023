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

Name: getCount()
Description: This function will return the number of products in the database
Parameters: $conn (object)
version: 1.0

*/

function getCount($conn) {

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        return $result->num_rows;
    } else {
        return 0;
    }
}

/*

Name: getThree()
Description: This function will return the latest three products in the database
Parameters: $conn (object)
version: 1.0

*/

function getThree($conn) {

    $sql = "SELECT * FROM products ORDER BY date DESC LIMIT 3";
    $result = $conn->query($sql);
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