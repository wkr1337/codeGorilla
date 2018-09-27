<?php
    if (!isset($_SESSION)) { session_start(); }
    if(session_destroy()){
        header("Location: //localhost/CodeGorilla2/logInSql/login.php");
    }
?>
