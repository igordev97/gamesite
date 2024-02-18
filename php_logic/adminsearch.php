<?php
    $src = $_GET["src"];
    if($src == ""){
        header("Location:../admin.php");
        exit();
    }
    header("Location:../admin.php?src=$src");
    exit();

?>