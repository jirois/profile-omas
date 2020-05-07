<?php declare(strict_types=1);

namespace Handlers;

class Bio extends Handler{
    public function handler(){
        return  (new \Components\Template('bio'))->render();
    }

    public function getTitle():string{
        return "Omas Bio";
    }
}