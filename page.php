<?php
 require_once "./php_logic/load_session.php";
    require_once "./php_logic/database.php";
    require_once "./php_logic/load_games.php";
  
    
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $game = loadSingleGame($db,$id);
        }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$game["game_title"]?></title>
    <?php include "./html_tamplate/links.php"?>
</head>
<body>
<?php include "./html_tamplate/navigation.php"?>

    <main class="container page-game">
        <?php if(isset($_GET["err"])):?>
            <p class="text-danger"><?=$_GET["err"]?></p>
        <?php else:?>
            <div class="d-flex align-items-center px-5 gap-2 mt-2 text-light">
            <a href="#" class="navbar-brand">PC Game</a>
            <hr height="2px" width="90%">
            <img src="./svg_icons/pc.svg" alt="" width="20px">
        </div>

        <div class="row p-5">
            <div class="col-12 mx-auto d-flex gap-1">
                <div class="col-3">
                    <img src="./images/<?=$game["game_img_cover"]?>" alt="" class="page-img">
                </div>
                <div class="col-9 p-5" >
                <h2>Name: <?=$game["game_title"]?></h2>
                   <div class="row mt-3">
                    <div class="col-6">
                        <h6>Platform : PC</h6>
                        <h6>Genre: <?=$game["game_ganre"]?></h6>
                        <h6>File type: ISO</h6>
                    </div>
                    <div class="col-6">
                        <h6>FREE DISK SPACE: <?=$game["game_hdd"]?>GB</h6>
                        <h6>Release date: <?=$game["game_release_date"]?></h6>
                    </div>
                   </div>
                   <h6 class="mt-4">Description :</h6>
                   <p class="p-2" id="description"><?=$game["game_description"]?></p>
                <a href="<?=$game["game_can_i_run_it"]?>" class="btn btn-primary" target="_blank">Can I Run It <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
               
                    <div class="col-7 mx-auto d-flex flex-column align-items-center mt-5 flex-wrap">
                    <div>

                   <iframe width="650" height="420" src="<?=$game["game_trailer_url"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   
                   </div>

                   <h6 class="text-center mt-1">Download Links:</h6>
                   <p><strong>Install instruction</strong>: Before you click on download button first you need to download qTorrent and Deamond Tools programs on your computer and install them</p>
                   <div class="d-flex gap-2">
                   <a class="btn btn-success mt-5" href="<?=$game["game_download_url"]?>">Download <?=$game["game_title"]?> <i class="fa-solid fa-circle-down"></i></a>
                   <a class="btn btn-primary mt-5" target="_blank" href="https://www.fosshub.com/qBittorrent.html?dwl=qbittorrent_4.6.3_x64_setup.exe">Download qTorrent <i class="fa-solid fa-circle-down"></i></a>
                   <a class="btn btn-info mt-5" href="https://www.daemon-tools.cc/products/dtLite#install-dtLite-offer" target="_blank">Download DAEMON Tools Lite <i class="fa-solid fa-circle-down"></i></a>
                   </div>
                   
                    </div>
                
        </div>
        <?php endif;?>    

    </main>
</body>
</html>