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
    <title>Admin Panel</title>
    <?php include "./html_tamplate/links.php"?>
</head>
<body>
    <?php include "./html_tamplate/navigation.php"?>
    <?php if(!isset($_SESSION["admin"])): ?>
        <div class="container">
            <div class="row vh-100 d-flex align-items-center justify-content-center">
                <div class="col-5 mx-auto">
                    <div >
                    <form action="./php_logic/login.php" method="post">
                        <h3 class="text-center text-light">Admin Login</h3>
                        <div class="form-group">
                            <label for="email-username" class="form-label  text-light">Enter email or username:</label>
                            <input type="text" id="email-username" class="form-control" name="usernameEmail">
                        </div>
                        <div class="form-group my-5">
                            <label for="password" class="form-label  text-light">Enter password:</label>
                            <input type="password"  id="password" class="form-control" name="password">
                        </div>


                        <button class="btn btn-primary form-control">Login</button>
                        
                    </form>
                    </div>

                    <?php if(isset($_GET["err"])): ?>
                        <p class="text-danger"><?=$_GET["err"]?></p>
                     <?php endif;?>   
                </div>
            </div>
        </div>
     <?php else:?>
        <div class="container vh-100 bg-light">
            <div class="row">
                <div class="col-2 d-flex align-items-center flex-column gap-3 bg-dark vh-100">
                    <a href="./admin.php" class="nav-link mt-5">All Games</a>
                    <hr class="text-light m-0 p-0" height="2px" width="100%">
                    <a href="admin.php?panel=addgame" class="nav-link">Add new game</a>
                    <hr class="text-light m-0 p-0" height="2px" width="100%">
                </div>
                <div class="col-10 bg-dark">
                    <?php if(isset($_GET["panel"]) && $_GET["panel"] =="addgame"): ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <h2>Add new game</h2>
                                    <form action="./php_logic/addgame.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="game_title" class="form-label  text-light">Game Title:</label>
                                        <input type="text" id="game_title" class="form-control" name="game_title">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="game_description" class="form-label  text-light">Description:</label>
                                        <textarea id="game_description" class="form-control" name="game_description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="game_genre" class="form-label  text-light">Game Genre:</label>
                                        <select id="game_genre" class="form-control" name="game_genre" class="select">
                                        <option value="Action">Action</option>
                                        <option value="Avanture">Advanture</option>
                                        <option value="Simulator">Simulation</option>
                                        <option value="Strategy">Strategy</option>
                                        <option value="Sport">Sport</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="game_hdd" class="form-label  text-light">Free HDD Space - GB:</label>
                                        <input type="text" id="game_hdd" class="form-control" name="game_hdd">
                                    </div>
                                    <div class="form-group">
                                        <label for="game_release_date" class="form-label  text-light">Game Release Date:</label>
                                        <input type="date" id="game_release_date" class="form-control" name="game_release_date">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="game_can_i_run_it" class="form-label  text-light">Can I Run It Url:</label>
                                        <input type="text" id="game_can_i_run_it" class="form-control" name="game_can_i_run_it">
                                    </div>

                                    <div class="form-group">
                                        <label for="game_download_url" class="form-label  text-light">Game Download Url:</label>
                                        <input type="text" id="game_download_url" class="form-control" name="game_download_url">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="game_img_cover" class="form-label  text-light">Game Cover Photo:</label>
                                        <input type="file" id="game_img_cover" class="form-control" name="game_img_cover">
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="game_trailer_url" class="form-label  text-light">Game Trailer Url:</label>
                                        <textarea id="game_trailer_url" class="form-control" name="game_trailer_url"></textarea>
                                    </div>

                                    <button class="btn btn-primary form-control">Add game</button>
                        
                    </form>
                    <?php if(isset($_GET["success"])): ?>
                        <p class="text-success"> <?=$_GET["success"]?> </p>
                        <?php endif;?>
                        <?php if(isset($_GET["err"])): ?>
                        <p class="text-danger"> <?=$_GET["err"]?> </p>
                        <?php endif;?>
                                </div>
                            </div>


                        </div> 
                    
                    <?php else: ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center my-4">All Games</h1>
                                    <div class="p-3 d-flex justify-content-between">
                                        <div></div>
                                        <form class="d-flex" role="search" action='./php_logic/adminsearch.php'>
                                        <input class="form-control me-2" type="search" placeholder="Search game" aria-label="Search" name="src">
                                        <button class="btn btn-outline-light" type="submit">Search</button>
                                    </form>
                                    </div>
                                    <?php if(empty($games)):?>
                                        <p class="text-danger">Game not founded</p>
                                     <?php else:?>
                                        <table class="table table-dark table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Game Name</th>
                                            <th>Game Genre</th>
                                            <th>Game Download Link</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($_GET["src"])):?>
                                                <?php foreach($games as $game): ?>
                                                <?php include "./html_tamplate/tablerow.php";?>
                                            <?php endforeach;?> 
                                            <?php else:?>
                                                <?php foreach($games as $game): ?>
                                                <?php include "./html_tamplate/tablerow.php";?>
                                            <?php endforeach;?> 
                                            <?php endif;?>           


                                        </tbody>


                                    </table>
                                     <?php endif;?>   
                                    <?php if(isset($_GET["update-err"])):?>
                                        <p class="text-danger"><?=$_GET["update-err"]?></p>
                                    <?php endif?>     
                                    <?php if(isset($_GET["delete-err"])):?>
                                        <p class="text-danger"><?=$_GET["delete-err"]?></p>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>

                     <?php endif;?>   
                    
                </div>
            </div>
        </div>
     <?php endif;?>   
    
</body>
</html>