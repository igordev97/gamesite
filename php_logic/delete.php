<?php
    require_once "./database.php";
    $id = $_POST["id"];

    $result = $db->query("DELETE FROM games WHERE id='$id'");

    if (!$result) {
        $msg = "Error not deleted";
        header("Location:../admin.php?delete-err=$msg");
    exit();
    }
        header("Location:../admin.php");
        exit();



?>