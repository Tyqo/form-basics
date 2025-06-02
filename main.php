<?php
require_once "mysql.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
	echo "Not a Post Request";
	exit;
}

// Prepare the SQL statement with placeholder(s)
$sql = "INSERT INTO users (name, age) VALUES (:name, :age)";
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':age', $_POST['age']);

// Execute the statement
if ($stmt->execute()) {
    echo "User added successfully!";
} else {
    echo "Error adding user: " . implode(' ', $stmt->errorInfo());
}
