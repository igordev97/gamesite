<?php
    require_once "./php_logic/load_session.php";
    require_once "./php_logic/database.php";
    require_once "./php_logic/load_games.php";

    if (!isset($_GET["src"])) {
        $games = loadAllGames($db);
    }
    else {
        $src = $_GET["src"];
        $games = loadGamesBySearch($db, $src);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./html_tamplate/links.php"?>
</head>
<body>
<?php include "./html_tamplate/navigation.php"?>

    <main class="container">
        <div class="d-flex align-items-center px-5 gap-2 mt-2 text-light">
            <a href="#" class="navbar-brand">PC Games</a>
            <hr height="2px" width="90%">
            <img src="./svg_icons/pc.svg" alt="" width="20px">
        </div>
        <div class="row p-5 d-flex flex-wrap gap-2 justify-content-start">



            <?php if(empty($games)):?>
                <p class="text-danger">No Games</p>
            <?php else:?>
                <?php foreach ($games as $game): ?>
                <?php include "./html_tamplate/card.php"?>
            <?php endforeach;?>
            <?php endif;?>        
        </div>
    </main>
</body>
</html>