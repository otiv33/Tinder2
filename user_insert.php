<?php
    include_once "db.php";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $sex = $_POST['sex'];
    $birth_year = $_POST['birth_year'];
    $interest = $_POST['interest'];
    $description = $_POST['description'];
    $city_id = $_POST['city_id'];

    if(!empty($nickname) && !empty($email) && !empty($pass1) && ($pass1 == $pass2)
         && !empty($sex) && !empty($birth_year) && !empty($interest) && !empty($city_id)){
        // Vse OK
        $pass = password_hash($pass1, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (first_name, last_name, nickname, email, pass, sex, birth_year, interest, description, city_id)
                  VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$first_name, $last_name, $nickname, $email, $pass, $sex, $birth_year, $interest, $description, $city_id]);
     }else{
         header("Location: registration.php");
         die();
     }

     header("Location: login.php");
?>