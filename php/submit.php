<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) 
{
    $theme = "New message from DK:";        
         
    $letter .="Name: ".$_POST['name'];
    $letter.="\n";
    $letter .="Email: ".$_POST['email'];
    $letter.="\n";
    $letter .="Message: ".$_POST['message'];
    
?>