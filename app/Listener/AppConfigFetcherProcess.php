<?php

namespace App\Listener;

use Hyperf\ConfigCenter\Process\ConfigFetcherProcess;
use Hyperf\Contract\ConfigInterface;
use Hyperf\DbConnection\Db;
use Hyperf\Process\ProcessManager;
use Psr\Container\ContainerInterface;

class AppConfigFetcherProcess extends ConfigFetcherProcess
{
    protected $config;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
        $this->config = $container->get(ConfigInterface::class);
    }

    public function handle(): void
    {
        $database_default = $this->config->get('databases.default', '');
        if (! $database_default) {
            return;
        }
        // todo 实现

        while (ProcessManager::isRunning()) {
            sleep(1);
        }
    }
}