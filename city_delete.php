<?php
    include_once "session.php";
    include_once "db.php";
    $city_id = $_GET['id'];
    $query = "DELETE FROM cities WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$city_id]);
    header("Location: cities.php");
?>