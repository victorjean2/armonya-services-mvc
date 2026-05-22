<?php

require_once ROOT_PATH . '/app/config/database.php';

class Devis
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function create(array $data): bool
    {
        $sql = "INSERT INTO devis (
                    nom,
                    prenom,
                    telephone,
                    email,
                    ville,
                    code_postal,
                    service_type,
                    frequence,
                    message,
                    rgpd_consent
                ) VALUES (
                    :nom,
                    :prenom,
                    :telephone,
                    :email,
                    :ville,
                    :code_postal,
                    :service_type,
                    :frequence,
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
            ':code_postal' => $data['code_postal'],
            ':service_type' => $data['service_type'],
            ':frequence' => $data['frequence'] ?? null,
            ':message' => $data['message'],
            ':rgpd_consent' => $data['rgpd_consent'],
        ]);
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM devis ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT * FROM devis WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);

        $devis = $stmt->fetch();

        return $devis ?: null;
    }
}