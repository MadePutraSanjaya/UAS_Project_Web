<?php
require_once('db.php');

function getAllDiscounts() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM discounts");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDiscountById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM discounts WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createDiscount($name, $description, $expired_at, $percentage) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO discounts (name, description, expired_at, percentage) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$name, $description, $expired_at, $percentage]);
}

function updateDiscount($id, $name, $description, $expired_at, $percentage) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE discounts SET name = ?, description = ?, expired_at = ?, percentage = ? WHERE id = ?");
    return $stmt->execute([$name, $description, $expired_at, $percentage, $id]);
}

function deleteDiscount($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM discounts WHERE id = ?");
    return $stmt->execute([$id]);
}
?>
