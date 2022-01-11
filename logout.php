<?php
    session_start();
    session_destroy(); //Destroys Session
    echo("<script>sessionStorage.setItem('profile', '0');  window.location = 'index.php';</script>");
?>