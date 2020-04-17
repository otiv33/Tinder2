<?php
    include_once "header.php"
?>

<h1>Registracija</h1>

<form action="user_insert.php" method="POST" class="form-group">
    <input type="text" name="first_name" placeholder="Vnesi ime" class="form-control"/><br/>
    <input type="text" name="last_name" placeholder="Vnesi priimek" class="form-control"/><br/>
    <input type="text" name="nickname" required="required" placeholder="Vnesi vzdevek" class="form-control"/><br/>
    <input type="email" name="email" required="required" placeholder="Vnesi elektronski naslov" class="form-control"/><br/>
    <input type="password" name="pass1" required="required" placeholder="Vnesi geslo" class="form-control"/><br/>
    <input type="password" name="pass2" required="required" placeholder="Ponovi geslo" class="form-control"/><br/>
    <select id="sex" name="sex" class="form-control">
        <option  disabled selected>Izberi svoj spol:</option>
        <option value="M">Moški</option>
        <option value="F">Ženski</option>
    </select> <br/>
    <input type="text" name="birth_year" required="required" placeholder="Vnesi leto rojstva" class="form-control"/><br/>
    <textarea name="description" cols="8" rows="8" class="form-control"></textarea><br/>
    <select id="interest" name="interest">
        <option  disabled selected>Izberi spol, ki te zanima:</option>
        <option value="M">Moški</option>
        <option value="F">Ženski</option>
        <option value="B">Oboje</option>
    </select> <br/>
    <select id="city_id" name="city_id" class="form-control">
        <option  disabled selected>Izberi kraj:</option>
        <?php
            include_once "db.php";
            $query = "SELECT * FROM cities ORDER BY title";
            $stmt=$pdo->prepare($query);
            $stmt->execute();
            while($row = $stmt->fetch()){
                echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
            }
        ?>
    </select> <br/>
    <input type="submit" value="Registracija" class="form-control"/><br/>
</form>

<?php
    include_once "footer.php"
?>