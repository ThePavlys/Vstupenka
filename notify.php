<?php
$to = "pavel.dousa9@gmail.com";
$subject = "Stránka byla otevřena";
$message = "Stránka byla otevřena z IP: " . $_SERVER['REMOTE_ADDR'];
$headers = "From: VstupenkaProAničku";

mail($to, $subject, $message, $headers);
?>
