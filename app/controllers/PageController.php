<?php

class PageController
{
    public function show(
        string $viewName,
        string $pageTitle,
        string $metaDescription,
        string $bodyClass = ''
    ): void {
        $viewFile = VIEW_PATH . '/pages/' . $viewName . '.php';

        if (!file_exists($viewFile)) {
            $pageTitle = 'Page introuvable | Armonya Services';
            $metaDescription = 'La page demandée est introuvable.';
            $bodyClass = 'page-404';
            $viewFile = VIEW_PATH . '/pages/404.php';
        }

        require VIEW_PATH . '/layouts/header.php';
        require $viewFile;
        require VIEW_PATH . '/layouts/footer.php';
    }
}