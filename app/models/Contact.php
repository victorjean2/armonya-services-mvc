<?php

require_once ROOT_PATH . '/app/config/database.php';

class Contact
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function create(array $data): bool
    {
        $sql = "INSERT INTO contacts (
                    nom,
                    email,
                    telephone,
                    sujet,
                    message,
                    rgpd_consent
                ) VALUES (
                    :nom,
                    :email,
                    :telephone,
                    :sujet,
                    :message,
                    :rgpd_consent
                )";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':nom' => $data['nom'],
            ':email' => $data['email'],
            ':telephone' => $data['telephone'] ?? null,
            ':sujet' => $data['sujet'],
            ':message' => $data['message'],
            ':rgpd_consent' => $data['rgpd_consent'],
        ]);
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);

        $contact = $stmt->fetch();

        return $contact ?: null;
    }
}