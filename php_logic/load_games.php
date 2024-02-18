<?php
function loadAllGames($db) {
    $result = $db->query("SELECT * FROM games ORDER BY game_title ASC");
    
    $games = $result->fetch_all(MYSQLI_ASSOC);
    
    return $games;
    
}

function loadAllGamesByGanre($db,$ganreName){
    $result = $db->query("SELECT * FROM games WHERE game_ganre='$ganreName' ORDER BY game_title ASC");


    if($result->num_rows > 0) {
        $games = $result->fetch_all(MYSQLI_ASSOC);
    
        return $games;
    }


}

function loadSingleGame($db,$gameId){
    $result = $db->query("SELECT * FROM games WHERE id='$gameId'");


    if($result->num_rows == 0) {
        $err = "Not found game";
        header("Location:./page.php?err=$err");
        exit();
    }

    $game = $result->fetch_assoc();
    
    return $game;
}


function loadGamesBySearch($db,$search){
    $result = $db->query("SELECT * FROM games WHERE game_title LIKE '%$search%' OR game_description LIKE '%$search%' OR game_ganre LIKE '%$search%' ORDER BY game_title ASC");
    
    if($result->num_rows > 0) {
        $games = $result->fetch_all(MYSQLI_ASSOC);
        return $games;
    }
    
}


?>