<?php
    include_once "session.php";
    include_once "db.php";

    $title = $_POST['title'];
    $city_id = (int) $_POST['city_id'];
    $description = $_POST['description'];

    $query ="INSERT INTO locations(title, description, city_id, user_id, approved) VALUES(?,?,?,?,1)"; // 1 je na koncu da je po default approved
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title, $description, $city_id, $_SESSION['user_id']]);

    header("Location: locations.php");    
?>