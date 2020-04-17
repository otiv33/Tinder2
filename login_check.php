<?php
    include_once "db.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(!empty($email) && !empty($pass)){
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            if(password_verify($pass, $user['pass'])){
                //Vse je pravilno
                header("Location: index.php");
                die();
            }
        }
    }

    header("Location: login.php");
    die();
    
?>