<?php
    include_once "header.php";
    include_once "db.php";
?>

<h1>Lokacije za zmenke</h1>
<p>Na tej strani najdete vse lokacije, ki vam jih svetujejo za zmenek</p>

<a href="location_add.php" class="button">Dodaj lokacijo</a><br/>

<h2>Pregled lokacij</h2>

<?php
    $query = "SELECT * FROM locations ORDER BY title";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    while ($row = $stmt->fetch()){
        echo '<div class="tlocation">';
        echo $row['title'];
        //echo '<br />';
        echo ' <a href="location_delete.php?id='.$row['id'].'" onclick="return confirm(\'A si ziher?\');">Izbriši</a>';
        echo ' <a href="location_edit.php?id='.$row['id'].'">Uredi</a>';
        echo "</div>";
    }
?>

<?php
    include_once "footer.php";
?>