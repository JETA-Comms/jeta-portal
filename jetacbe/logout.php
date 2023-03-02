<?php
    session_start();
    //Destroy session
    if(session_destroy()) {
        //Redirecting to Login page
        header("Location: index.php");
}