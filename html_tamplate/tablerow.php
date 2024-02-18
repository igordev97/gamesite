<tr>
    <td>
        <img src="./images/<?= $game["game_img_cover"]?>" alt="" width="20px" height="30px">
    </td>
    <td>
    <?=$game["game_title"]?>
    </td>
    <form action="./php_logic/update.php" method="post">
    <td>
    <select id="game_ganre" class="form-control" name="game_ganre" class="select">
                                        <option selected disabled value="<?=$game["game_ganre"]?>"><?=$game["game_ganre"]?></option>
                                        <option value="Action">Action</option>
                                        <option value="Avanture">Advanture</option>
                                        <option value="Simulation">Simulation</option>
                                        <option value="Strategy">Strategy</option>
                                        <option value="Sport">Sport</option>
                                        </select>
    </td>
    <td>
        <input type="text" name="game_download_url" id="game_download_url" class="form-control" value="<?=$game["game_download_url"]?>">
    </td>

    <td>
    <input type="hidden" name="id" value=" <?=$game["id"]?>">
     <button class="btn btn-info">Update</button>
    </td>
    </form>
     <td>
      <form action="./php_logic/delete.php" method="post">
        <input type="hidden" name="id" value=" <?=$game["id"]?>">
         <button class="btn btn-danger">Delete</button>
      </form>
     </td>
</tr> 