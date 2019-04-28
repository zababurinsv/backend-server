<?php


namespace console\controllers;
use

class WorkerController extends \inpassor\daemon\Worker
{
    public $active = true;
    public $maxProcesses = 1;
    public $delay = 60;


    public function run()
    {
        $this->log('I live... again!');
    }

}