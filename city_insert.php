<?php
    include_once "session.php";
    include_once "db.php";

    $title = $_POST['title'];

    $query ="INSERT INTO cities(title) VALUES(?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title]);

    header("Location: cities.php");    
?>