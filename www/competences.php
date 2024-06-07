<?php

require 'includes/functions.php';

$twig = getTwigInstance();

$tpl_data = [
    'titlec' => 'Compétences'
];

// Chargement du template approprié
$template = $twig->load('competences.twig');
echo $template->render($tpl_data);
?>