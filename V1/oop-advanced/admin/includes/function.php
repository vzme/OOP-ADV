<?php

function redirect($url){

    header("Location:{$url}");

}

function n($i){
    global $session;
    if ($i === 0) {
        if ($session->get_login_in()) {
            redirect("index.php");
        }
    } else {
        if ($i === 1) {
            if (!$session->get_login_in()) {
                redirect("login.php");
            }
        }
    }

    if ($i === 2) {
        if (($session->get_login_in() || !$session->get_login_in()) && $session->rule != 2) {
            redirect("index.php");
        }
    }
}


if(isset($_GET['logout'])){
$session->logout();
redirect("login.php");
}



?>