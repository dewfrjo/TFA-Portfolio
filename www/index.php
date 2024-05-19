<?php

require_once 'includes/functions.php';

$twig = getTwigInstance();

$template = $twig->load('index.twig');

$tpl_data = [
  
];

echo $template->render($tpl_data);
