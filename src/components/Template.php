<?php declare(strict_types=1);

namespace Components;

class Template{
    private $name;

    public static $viewsPath = __DIR__ . '/../templates';
    
    function __construct($name){
        $this->name = $name;
    }

    private function getFilePath():string{
        return self::$viewsPath . DIRECTORY_SEPARATOR . $this->name . '.php';
    }

    public function render(array $data = []){
        extract($data, EXTR_OVERWRITE);
        ob_start();
        require $this->getFilePath();
        $rendered = ob_get_clean();
        return (string) $rendered;
    }
}