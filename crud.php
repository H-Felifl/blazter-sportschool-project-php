<?php

include 'dbcon.php';  // Database connection using PDO

function readData($db) {
    try {
        // Query to select data from the table
        $query = 'SELECT * FROM students';  // Replace with your actual table name
        $stmt = $db->prepare($query);  // Prepare the query
        $stmt->execute();  // Execute the query

        // Fetch all results and return as an array
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Handle any error that occurs
        echo "Error: " . $e->getMessage();
        return [];
    }
}


//function createData($db) {
//    try {
//        $query = 'SELECT * FROM students';  // Replace with your actual table name
//        $stmt = $db->prepare($query);  // Prepare the query
//        $stmt->execute();  // Execute the query
//
//        // Fetch all results and return as an array
//
//        // Query to select data from the table
//        $query = $db->prepare('INSERT INTO students (first_name,last_name,Age) VALUES (:first_name,:last_name,:Age)'); // Replace with your actual table name
//        $query->bind
//
//        // Fetch all results and return as an array
//        return $query->fetchAll(PDO::FETCH_ASSOC);
//    } catch (PDOException $e) {
//        // Handle any error that occurs
//        echo "Error: " . $e->getMessage();
//        return [];
//    }

