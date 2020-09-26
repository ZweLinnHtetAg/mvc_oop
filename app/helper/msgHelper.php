<?php

function setMessage($message)
{
    session_start();
    $_SESSION['message'] = $message;
}

function unsetMessage($name)
{
    unset($_SESSION[$name]);
}

?>