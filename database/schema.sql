CREATE TABLE IF NOT EXISTS contacts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telephone VARCHAR(30) NULL,
    sujet VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    rgpd_consent TINYINT(1) NOT NULL DEFAULT 0,
    status ENUM('nouveau', 'lu', 'traite', 'archive') NOT NULL DEFAULT 'nouveau',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS devis (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    telephone VARCHAR(30) NOT NULL,
    email VARCHAR(150) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    code_postal VARCHAR(20) NOT NULL,
    service_type VARCHAR(150) NOT NULL,
    frequence VARCHAR(100) NULL,
    message TEXT NOT NULL,
    rgpd_consent TINYINT(1) NOT NULL DEFAULT 0,
    status ENUM('nouveau', 'lu', 'traite', 'archive') NOT NULL DEFAULT 'nouveau',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS candidatures (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    telephone VARCHAR(30) NOT NULL,
    email VARCHAR(150) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    mobilite VARCHAR(150) NULL,
    experience TEXT NULL,
    services_proposes VARCHAR(255) NULL,
    disponibilites TEXT NULL,
    cv_filename VARCHAR(255) NULL,
    message TEXT NULL,
    rgpd_consent TINYINT(1) NOT NULL DEFAULT 0,
    status ENUM('nouvelle', 'lue', 'retenue', 'refusee', 'archivee') NOT NULL DEFAULT 'nouvelle',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;