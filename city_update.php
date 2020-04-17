<?php
    include_once "session.php";
    include_once "db.php";

    $title = $_POST['title'];
    $id = $_POST['id'];

    $query ="UPDATE cities SET title=? WHERE id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title, $id]);

    header("Location: cities.php");    
?>