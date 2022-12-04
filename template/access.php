<?php

function access($type, $redirect = true)
{
    if(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$type])
    {
        if($redirect)
        {
            header("location: access-denied.php");
            die;
        }

        return false;
    }

    return true;
}

$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION["type"]) && $_SESSION["type"] == 1;
$_SESSION["ACCESS"]["USER"] = (isset($_SESSION["type"]) && $_SESSION["type"] == 0 || isset($_SESSION["type"]) && $_SESSION["type"] == 1);

