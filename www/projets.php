<?php

require 'includes/functions.php';

$twig = getTwigInstance();

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

// Chargement du template approprié
$template = $twig->load('projets.twig');
echo $template->render($tpl_data);
?>
