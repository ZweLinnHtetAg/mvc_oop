<?php

function setMessage($message)
{
    session_start();
    $_SESSION['message'] = $message;
}


?>