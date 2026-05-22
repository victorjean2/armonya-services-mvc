<?php

class HomeController
{
    public function index(): void
    {
        $pageTitle = 'Armonya Services | Services à domicile et conciergerie en Île-de-France';
        $metaDescription = 'Armonya Services accompagne les particuliers et les familles en Île-de-France avec des prestations à domicile, des services à la personne et une conciergerie privée.';
        $bodyClass = 'page-home';

        require VIEW_PATH . '/layouts/header.php';
        require VIEW_PATH . '/pages/home.php';
        require VIEW_PATH . '/layouts/footer.php';
    }
}