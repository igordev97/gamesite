<?php
    require_once "./database.php";
    $id = $_POST["id"];
    $game_ganre = $_POST["game_ganre"];
    $game_ganre = $db->real_escape_string($game_ganre);
    $game_download_url = $_POST["game_download_url"];
    $game_download_url =  $db->real_escape_string($game_download_url);

    $result = $db->query("UPDATE games SET game_ganre='$game_ganre',game_download_url='$game_download_url' WHERE id='$id'");

    if (!$result) {
        $msg = "Error not updated";
        header("Location:../admin.php?update-err=$msg");
    exit();
    }
        header("Location:../admin.php");
        exit();



?>