<?php
    require_once "./database.php";
    require_once "./load_session.php";

    $game_title = $_POST["game_title"];
    $game_description = $_POST["game_description"];
    $game_genre = $_POST["game_genre"];
    $game_genre = $_POST["game_genre"];
    $game_hdd = $_POST["game_hdd"];
    $game_release_date = date("Y-m-d",strtotime($_POST["game_release_date"]));
    $game_can_i_run_it = $_POST["game_can_i_run_it"];
    $game_download_url = $_POST["game_download_url"];
    $game_img_coverName = $_FILES["game_img_cover"]["name"]; 
    $game_img_coverTmp = $_FILES["game_img_cover"]["tmp_name"]; 
    $game_img_coverDestination = "../images/".$game_img_coverName;
    $game_trailer_url = $_POST["game_trailer_url"];

    move_uploaded_file($game_img_coverTmp, $game_img_coverDestination);

    $result = $db->query("INSERT INTO games (game_title,game_description,game_ganre,game_hdd,game_release_date,game_can_i_run_it,game_download_url,game_img_cover,game_trailer_url) VALUES('$game_title','$game_description','$game_genre','$game_hdd','$game_release_date','$game_can_i_run_it','$game_download_url','$game_img_coverName','$game_trailer_url')");

    if (!$result) {
        header("Location:../admin.php?panel=addgame&err=Faild");
        exit();
    }

    header("Location:../admin.php?panel=addgame&success=Great");



?>