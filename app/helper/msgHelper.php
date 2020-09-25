<?php

function setMessage($message)
{
    session_start();
    $_SESSION['message'] = $message;
}

function unsetMessage($message)
{
    unset($_SESSION[$name]);
}

?>