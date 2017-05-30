<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!doctype html>
<html>
    <head>
        <title>views</title>
        <link rel="stylesheet" type="text/css" href="<?=URL;?>public/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?=URL;?>public/css/default.css" />
        <script type="text/javascript" src="<?=URL;?>public/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?=URL;?>public/js/custom.js"></script>
    </head>
    <body>
        <?php
        Session::init();
        ?>
        <div id="header">
            header
            <br/>
            <a href="<?=URL;?>index">Index</a>
            <a href="<?=URL;?>help">Help</a>
            <?php
                if(Session::get('loggedIn') == true){
            ?>
                <a href="<?=URL;?>dashboard/logout">Logout</a>
            <?php
                }else{
            ?>
                <a href="<?=URL;?>login">Login</a>
            <?php
                }
            ?>
        </div>
        <div id="content">