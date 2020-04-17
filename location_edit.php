<?php
    include_once "db.php";
    include_once "header.php";

    $id = (int) $_GET['id'];
    $query = "SELECT * FROM locations WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>

<head>
    <Title>Tinder</Title>
</head>

<h1>Uredi lokacijo</h1>

<form action="location_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <label>Uredi lokacijo</label>
    <input type="text" name="title" required="required"  class="form-control" value="<?php echo $row['title'];?>"/></br>
    <label> Uredi opis lokacije </label>
    <textarea name="description" cols="4" rows="6" class="form-control" value="<?php echo $row['description'];?>"></textarea> <br />
    <label> Izberi kraj: </label>
    <div>
        <select id="city_id" name="city_id" class="form-control">">
            <option  disabled selected>Izberi kraj:</option>
            <?php
                $query = "SELECT * FROM cities ORDER BY title";
                $stmt=$pdo->prepare($query);
                $stmt->execute();
                while($row2 = $stmt->fetch()){
                    if($row2['id'] == $row['city_id']){
                        echo '<option value="'.$row2['id'].'"selected =="selected">'.$row2['title'].'</option>';
                    }
                    else{
                        echo '<option value="'.$row2['id'].'">'.$row2['title'].'</option>';
                    }
                }
            ?>
        </select><br />
    </div>
    <input type="submit" value="Shrani" class="form-control"/>
</form>

<?php
    include_once "footer.php"
?>