<?php
namespace HelloWorld;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class HelloWorld
{
    public $log;

    public function __construct($path = './hello.log')
    {
        $this->log = new Logger('HelloWorld');
        $this->log->pushHandler(new StreamHandler($path, Logger::INFO));
    }

    public function hello($name = 'World')
    {
        $this->log->addInfo('Hello '.$name);
    }
}
