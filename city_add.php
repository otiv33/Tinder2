<?php
    include_once "header.php";
?>

<head>
    <Title>Tinder</Title>
</head>

<h1>Dodaj kraj</h1>

<form action="city_insert.php" method="post">
    <label>Vnesi kraj</label>
    <input type="text" name="title" required="required"/></br>
    
    <input type="submit" value="Shrani"/>
</form>

<?php
    include_once "footer.php"
?>