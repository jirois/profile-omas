<?php declare(strict_types=1);

namespace Handlers;

class Skill extends Handler{

    function handler(){
        return ( new \Components\Template('skill'))->render();
    }
}