<?php
    include_once "header.php";
?>
<h1>Pozdravljeni pri nas</h1>

<?php

    echo $_SESSION['full_name'].' / '.$_SESSION['user_id'];

?>

<?php
    include_once "footer.php"
?>