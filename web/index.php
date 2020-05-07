<?php declare(strict_types=1);

namespace Components;

require_once __DIR__ . '/../src/components/Template.php';
require_once __DIR__ . '/../src/components/Router.php';
require_once __DIR__ . '/../src/handlers/Handlers.php';
require_once __DIR__ . '/../src/handlers/Bio.php';
require_once __DIR__ . '/../src/handlers/Skill.php';



$mainTemplate =  new \Components\Template('main');

$dataTemplate = [
    'title' => 'omas profile'
];

$route = new \Components\Router();

if($handler = $route->getHandler()){
    $content = $handler->handler();

    if ($handler->willRedirect()){
        return;
    }

    $dataTemplate['content'] = $content;
    $dataTemplate['title'] = $handler->getTitle();
}



echo $mainTemplate->render($dataTemplate);

