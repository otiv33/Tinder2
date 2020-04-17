<?php
    include_once "session.php";
    include_once "db.php";
    $location_id = $_GET['id'];
    $query = "DELETE FROM locations WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$location_id]);
    header("Location: locations.php");
?>