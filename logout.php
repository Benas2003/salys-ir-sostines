<?php
    session_start();
    if(session_destroy())
    {
        header("Location: index");
    }
    unset($_COOKIE['Laikinasis']); 
    setcookie('Laikinasis', null, -1, '/'); 
?>