<?php
    include_once "session.php";
    include_once "db.php";

    $title = $_POST['title'];
    $city_id = (int) $_POST['city_id'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $query ="UPDATE locations SET title=?, description=?, city_id=? WHERE id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title, $description, $city_id, $id]);

    header("Location: locations.php");
?>