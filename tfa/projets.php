<?php

require 'includes/functions.php';

$twig = getTwigInstance();

$tpl_data = [
    'titlep' => 'Projets',
    'projet_data' => [
        'projet1' => [
            'name' => 'Iolce',
            'date' => '2022 - 2023',
            'description' => 'Nous devions faire un site en lien avec un documentaire sur la place qu\'à l\'éthique dans le design. La base du travail et de la recherche fait en amont du site a été réalisé en groupe, puis le rest de façon individuelle. Ce fut notre premier travail réellement de recherche et de synthèse d\'informations.',
            'projet_img1' => 'assets/images/iolce1.jpg',
            'projet_img2' => 'assets/images/iolce2.jpg'
        ],
        'projet2' => [
            'name' => 'TFA',
            'date' => '2022 - 2023',
            'description' => 'Pour le travail de fin d\'année de mon année 2022 - 2023, se basait sur la recherche d\'une problématique dans un secteur au choix. Ce fut donc le premier projet où nous avions dû avoir une prise de contact avec des personnes qui sont externes à l\'école et la création d\'un guide d\'entretien.',
            'projet_img1' => 'assets/images/tfa1.jpg',
            'projet_img2' => 'assets/images/tfa2.jpg'
        ],
        'projet3' => [
            'name' => 'Rethinking-ux',
            'date' => '2023 - 2024',
            'description' => 'Rux était un atelier de groupe porter sur l\'aménagement de nos locaux, mais ces aménagements doivent avoir un intérêt avec notre option. Nous sommes partie avec mon groupe sur une idée de projet qui puisse aider les élèves à trouver de l\'inspiration et ce d\'un petit regard sur le mur.',
            'point__positif' => 'Ce qui m\'a vraiment plus dans ce prohet, c\'est le fait qu\' ai tous réalisé de A à Z avec le groupe (de l\'idée à la mise en place sur le mur).',
            'projet_img1' => 'assets/images/rux.jpg',
            'projet_img2' => 'assets/images/rux-instal.jpg'
        ]
    ]
];

// Chargement du template approprié
$template = $twig->load('projets.twig');
echo $template->render($tpl_data);
?>
