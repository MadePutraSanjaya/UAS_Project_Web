<?php
require_once('db.php');

function getAllTravels() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM travels");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTravelById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM travels WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createTravel($name, $description, $price, $day_count, $night_count, $discount_id, $category_id) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO travels (name, description, price, day_count, night_count, discount_id, category_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    return $stmt->execute([$name, $description, $price, $day_count, $night_count, $discount_id, $category_id]);
}

function updateTravel($id, $name, $description, $price, $day_count, $night_count, $discount_id, $category_id) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE travels SET name = ?, description = ?, price = ?, day_count = ?, night_count = ?, discount_id = ?, category_id = ? WHERE id = ?");
    return $stmt->execute([$name, $description, $price, $day_count, $night_count, $discount_id, $category_id, $id]);
}

function deleteTravel($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM travels WHERE id = ?");
    return $stmt->execute([$id]);
}
?>
