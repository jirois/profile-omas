<?php declare(strict_types=1);

namespace Components;
use Handlers\Handler;
use Handlers\Bio;
use Handlers\Skill;

class Router{
    public function getHandler():?Handler{
        switch($_SERVER['PATH_INFO'] ?? '/'){
            case '/bio':
                return new Bio();
            case '/skill':
                return new Skill();
            case '/':
                return null;
            default:
                return null;
        }
    }
}


