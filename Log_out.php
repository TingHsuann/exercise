<?php
    session_start();
    session_destroy();
    setcookie("UID",$uID,time()-36);
    header('Location:Log_in.php');
?>