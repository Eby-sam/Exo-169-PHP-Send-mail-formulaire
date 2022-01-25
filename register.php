<?php

$to      = trim($_POST["mail"]);
$subject = 'Sujet';
$message = htmlentities(trim($_POST["message"]));

if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message);
}
header("Location: index.php?s=U3VjY8Opcwo=");