<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= e($metaDescription ?? '') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($pageTitle ?? 'Armonya Services') ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="<?= e($bodyClass ?? '') ?>">
    <header class="site-header">
        <div class="container header-container">
            <!-- Logo -->
            <a href="<?= route('home') ?>" class="site-logo" aria-label="Retour à l'accueil Armonya Services">
                <img
                    src="assets/images/logo-armonya-services.png"
                    alt="Logo Armonya Services - Services à domicile et conciergerie privée">
            </a>

            <!-- Bouton burger mobile -->
            <button
                class="burger-button"
                type="button"
                aria-label="Ouvrir le menu de navigation"
                aria-expanded="false"
                aria-controls="header-menu">
                <span class="burger-line" aria-hidden="true"></span>
                <span class="burger-line" aria-hidden="true"></span>
                <span class="burger-line" aria-hidden="true"></span>
            </button>

            <!-- Menu principal -->
            <div class="header-menu" id="header-menu">
                <nav class="main-navigation" aria-label="Navigation principale">
                    <ul class="nav-list">
                        <li>
                            <a href="<?= route('home') ?>" <?= isActive('home') ?>>
                                Accueil
                            </a>
                        </li>

                        <li>
                            <a href="<?= route('services') ?>" <?= isActive('services') ?>>
                                Services à la personne
                            </a>
                        </li>

                        <li>
                            <a href="<?= route('conciergerie') ?>" <?= isActive('conciergerie') ?>>
                                Conciergerie privée
                            </a>
                        </li>

                        <li>
                            <a href="<?= route('recrutement') ?>" <?= isActive('recrutement') ?>>
                                Recrutement
                            </a>
                        </li>

                    
                    </ul>
                </nav>

                <div class="header-actions">
                    <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">
                        Demander un devis
                    </a>

                    <a href="tel:+33778256161" class="btn btn-secondary">
                        Appeler
                    </a>

                    <a
                        href="https://wa.me/33778256161"
                        class="btn btn-whatsapp"
                        target="_blank"
                        rel="noopener noreferrer">
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </header>