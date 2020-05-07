<?php declare(strict_types=1);

namespace Handlers;

abstract class Handler {
    private $pathUri = '';

    public abstract function handler();

    public function getTitle():string{
        return "Omas Profile";
    }

    public function requestRedirect(string $uri){
        $this->pathUri = $uri;
        Header("Location: $uri", true);
        
    }


    public function willRedirect():bool{
        return $this->pathUri > 0;
    }



}