<?php
include "header.php";
session_start();
$_SESSION = $_POST["name"];
?>
<p>
    Thanks <?php echo $_POST["name"]; ?>, you will receive our posts in your email: <?php echo $_POST["email"]; ?> 
</p>

<?php

$_COOKIE["category"];
include "footer.php"
?>