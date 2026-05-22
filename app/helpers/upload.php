<?php

function uploadCv(array $file, array &$errors): ?string
{
    if (empty($file['name'])) {
        return null;
    }

    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Une erreur est survenue lors de l’envoi du CV.';
        return null;
    }

    $maxSize = 2 * 1024 * 1024; // 2 Mo

    if ($file['size'] > $maxSize) {
        $errors[] = 'Le CV ne doit pas dépasser 2 Mo.';
        return null;
    }

    $allowedExtensions = ['pdf', 'doc', 'docx'];
    $originalName = $file['name'];
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    if (!in_array($extension, $allowedExtensions, true)) {
        $errors[] = 'Le CV doit être au format PDF, DOC ou DOCX.';
        return null;
    }

    $allowedMimeTypes = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ];

    $mimeType = mime_content_type($file['tmp_name']);

    if (!in_array($mimeType, $allowedMimeTypes, true)) {
        $errors[] = 'Le type de fichier du CV n’est pas autorisé.';
        return null;
    }

    $newFilename = 'cv_' . date('Ymd_His') . '_' . bin2hex(random_bytes(8)) . '.' . $extension;

    $destinationDir = ROOT_PATH . '/public/uploads/cv/';

    if (!is_dir($destinationDir)) {
        mkdir($destinationDir, 0755, true);
    }

    $destination = $destinationDir . $newFilename;

    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        $errors[] = 'Impossible d’enregistrer le CV.';
        return null;
    }

    return $newFilename;
}