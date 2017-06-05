<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

Dashboard... Logged in only..

<br/>

<form id="randomInsert" action="<?=URL;?>dashboard/xhrInsert" method="post">
    <input type="text" name="text" />
    <input type="submit" />
</form>

<br/>

<div id="listInserts">
    
</div>