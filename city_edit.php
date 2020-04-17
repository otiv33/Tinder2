<?php
    include_once "db.php";
    include_once "header.php";

    $id = (int) $_GET['id'];
    $query = "SELECT * FROM cities WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>

<head>
    <Title>Tinder</Title>
</head>

<h1>Uredi kraj</h1>

<form action="city_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <label>Uredi kraj</label>
    <input type="text" name="title" required = "required" value="<?php echo $row['title'];?>"/><br/>
    
    <input type="submit" value="Shrani"/>
</form>

<?php
    include_once "footer.php"
?>