<?php

namespace frontend\controllers;

/**
 * Class DaemonController. Frontend REST controller.
 */
class DaemonController extends \phantomd\filedaemon\frontend\controllers\DaemonController
{

    /**
     * @var string Daemon name in configuration
     */
    protected static $configAlias = 'file-server';

}
