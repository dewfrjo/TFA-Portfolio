<?php

require_once 'includes/functions.php';

$twig = getTwigInstance();

// $template = $twig->load('index.twig');
// $tpl_data = [
// ];
// echo $template->render($tpl_data);

// Gestion du routage
$requestUri = $_SERVER['REQUEST_URI'];
$templateName = '';

switch ($requestUri) {
    case '/':
        $templateName = 'index.twig';
        break;
    case '/projets':
        $templateName = 'projets.twig';
        break;
    case '/competences':
        $templateName = 'competences.twig';
        break;
}

// Chargement du template approprié
$template = $twig->load($templateName);

$tpl_data = [
    // Vous pouvez ajouter des données à passer aux templates ici
    'title' => 'Portfolio',
];

echo $template->render($tpl_data);
