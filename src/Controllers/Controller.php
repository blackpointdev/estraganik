<?php
declare(strict_types=1);

namespace Src\Controllers;

class Controller
{
    private $request;

    public function __construct()
    {
        session_start();
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = [])
    {
        // Get short name of class
        $reflection = new \ReflectionClass($this);
        $templatePath = $template ? dirname(__DIR__, 2).'/Views/'.$reflection->getShortName().'/'. $template.'.php' : '';

        $output = 'File not found';

        if(file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }
}