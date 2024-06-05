<?php

require 'includes/functions.php';

$twig = getTwigInstance();

$tpl_data = [
    'titlecredit' => 'Crédit'
];

// Chargement du template approprié
$template = $twig->load('credit.twig');
echo $template->render($tpl_data);
?>
