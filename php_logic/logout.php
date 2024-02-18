<?php
include "./load_session.php";
session_destroy();

header("Location:../admin.php");

?>