<?php

require 'includes/functions.php';

$twig = getTwigInstance();

$tpl_data = [
    'title' => 'Portfolio'
];

// Chargement du template approprié
$template = $twig->load('index.twig');
echo $template->render($tpl_data);
?>
