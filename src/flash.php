<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 20/04/2019
 * Time: 20:51
 */

function flash($message = null, $type = null ){
    if($message){
        $_SESSION['flash'][] = compact('message', 'type');
    }else{
        $flash = $_SESSION['flash'] ?? [];
        if (!count($flash)){
            return;
        }

        foreach ($flash as $key => $message){
            render('flash', 'ajax', $message);
            unset($_SESSION['flash'][$key]);

        }

    }
}