<?php declare(strict_types=1);
namespace Components;

require_once __DIR__ . '/../src/components/Template.php';

$mainTemplate =  new \Components\Template('main');

$dataTemplate = [
    'title' => 'omas profile'
];

echo $mainTemplate->render($dataTemplate);

