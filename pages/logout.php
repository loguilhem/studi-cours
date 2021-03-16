<?php
    setcookie(session_name(),'',time()-1000,'/');
    header('Location: ../index.php');
?>

