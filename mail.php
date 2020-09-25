<?php

$recepient = "user.DaniilKor@gmail.com";
$sitename = "DK_CV";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);
$letter = "Имя: $name \nEmail: $email \nСообщение: $message";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $letter, "Content-type: text/plain; charset=\"utf-8\"\nFrom: $recepient");
?>