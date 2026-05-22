<?php

require_once ROOT_PATH . '/app/config/database.php';

class Candidature
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function create(array $data): bool
    {
        $sql = "INSERT INTO candidatures (
                    nom,
                    prenom,
                    telephone,
                    email,
                    ville,
                    mobilite,
                    experience,
                    services_proposes,
                    disponibilites,
                    cv_filename,
                    message,
                    rgpd_consent
                ) VALUES (
                    :nom,
                    :prenom,
                    :telephone,
                    :email,
                    :ville,
                    :mobilite,
                    :experience,
                    :services_proposes,
                    :disponibilites,
                    :cv_filename,
                    :message,
                    :rgpd_consent
                )";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':telephone' => $data['telephone'],
            ':email' => $data['email'],
            ':ville' => $data['ville'],
            ':mobilite' => $data['mobilite'] ?? null,
            ':experience' => $data['experience'] ?? null,
            ':services_proposes' => $data['services_proposes'] ?? null,
            ':disponibilites' => $data['disponibilites'] ?? null,
            ':cv_filename' => $data['cv_filename'] ?? null,
            ':message' => $data['message'] ?? null,
            ':rgpd_consent' => $data['rgpd_consent'],
        ]);
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM candidatures ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT * FROM candidatures WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);

        $candidature = $stmt->fetch();

        return $candidature ?: null;
    }
}