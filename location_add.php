<?php
    include_once "header.php";
    include_once "db.php";
?>

<head>
    <Title>Tinder</Title>
</head>

<h1>Dodaj lokacijo</h1>

<form action="location_insert.php" method="post">
    <label>Vnesi lokacijo</label>
    <input type="text" name="title" required="required" class="form-control"/></br>
    <label> Opis </label>
    <textarea name="description" cols="4" rows="6" class="form-control"></textarea> <br />
    <label> Izberi kraj: </label>
    <div>
        <select id="city_id" name="city_id" class="form-control">
            <option  disabled selected>Izberi kraj:</option>
            <?php

                $query = "SELECT * FROM cities ORDER BY title";
                $stmt=$pdo->prepare($query);
                $stmt->execute();
                while($row = $stmt->fetch()){
                    echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                }
            ?>
        </select><br />
    </div>
    <input type="submit" value="Shrani" class="form-control"/>
</form>

<?php
    include_once "footer.php"
?>