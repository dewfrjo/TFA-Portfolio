<?php

require_once 'includes/functions.php';

$twig = getTwigInstance();

// Gestion du routage
$requestUri = $_SERVER['REQUEST_URI'];
$templateName = '';

switch ($requestUri) {
    case '/':
        $templateName = 'index.twig';
        $tpl_data = [
            'title' => 'Portfolio'
        ];
        break;
    case '/projets':
        $templateName = 'projets.twig';
        $tpl_data = [
            'titlep' => 'Projets',
            'projet_data' => [
                'projet1' => [
                    'name' => 'Iolce',
                    'date' => '2022 - 2023',
                    'description' => 'Description du projet Iolce',
                    'projet_img1' => 'assets/images/iolce1.jpg',
                    'projet_img2' => 'assets/images/iolce2.jpg'
                ],
                'projet2' => [
                    'name' => 'TFA',
                    'date' => '2022 - 2023',
                    'description' => 'Description du projet TFA',
                    'projet_img1' => 'assets/images/tfa1.jpg',
                    'projet_img2' => 'assets/images/tfa2.jpg'
                ],
                'projet3' => [
                    'name' => 'RUX',
                    'date' => '2023 - 2024',
                    'description' => 'Description du projet RUX',
                    'projet_img1' => 'assets/images/rux.jpg',
                    'projet_img2' => 'assets/images/rux-instal.jpg'
                ]
            ]
        ];
        break;
    case '/competences':
        $templateName = 'competences.twig';
        $tpl_data = [
            'titlec' => 'Compétences'
        ];
        break;
    case '/credit':
        $templateName = 'credit.twig';
        $tpl_data = [
            'titlecredit' => 'Crédit'
        ];
        break;
    default:
        // Page non trouvée
        http_response_code(404);
        $templateName = '404.twig';
        $tpl_data = [
            'titlenf' => 'Page Not Found'
        ];
        break;
}

// Chargement du template approprié
$template = $twig->load($templateName);
echo $template->render($tpl_data);
?>
