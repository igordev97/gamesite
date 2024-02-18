<?php

$src = $_GET["src"];

if($src ==""){
    header("Location:../");
exit();
}
header("Location:../?src=$src");
exit();

?>