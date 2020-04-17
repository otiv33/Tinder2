<?php
    include_once "db.php";
    include_once "header.php"
?>

<head>
    <Title>Tinder</Title>
</head>

<a href="city_add.php">Dodaj kraj</a><br/>
<h2>Vsi kraji iz baze</h2>

<?php
    
    $stmt = $pdo->query('SELECT * FROM cities');
    while ($row = $stmt->fetch())
    {
        echo "<strong>".$row['title']."</strong>";

        echo ' <a href="city_delete.php?id='.$row['id'].'" onclick="return confirm(\'A si ziher?\');">Izbriši</a>';

        echo ' <a href="city_edit.php?id='.$row['id'].'">Uredi</a>';

        echo "<br/>";
    }
?>

<?php
    include_once "footer.php"
?>