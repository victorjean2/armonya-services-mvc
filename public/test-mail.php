<?php

$to = 'contact@armonya-services.fr';
$subject = 'Test Mailpit - Armonya Services';
$message = 'Si tu vois ce message dans Mailpit, l’envoi fonctionne.';
$headers = "From: contact@armonya-services.fr\r\n";
$headers .= "Reply-To: contact@armonya-services.fr\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Email envoyé vers Mailpit.';
} else {
    echo 'Erreur lors de l’envoi.';
}