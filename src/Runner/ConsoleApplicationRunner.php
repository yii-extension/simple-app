<?php

declare(strict_types=1);

namespace Simple\App\Runner;

use Error;
use ErrorException;
use Exception;
use Psr\Container\ContainerInterface;
use Yiisoft\Config\Config;
use Yiisoft\Config\ConfigPaths;
use Yiisoft\Definitions\Exception\CircularReferenceException;
use Yiisoft\Definitions\Exception\InvalidConfigException;
use Yiisoft\Definitions\Exception\NotFoundException;
use Yiisoft\Definitions\Exception\NotInstantiableException;
use Yiisoft\Di\Container;
use Yiisoft\Yii\Console\Application;
use Yiisoft\Yii\Console\Output\ConsoleBufferedOutput;

final class ConsoleApplicationRunner
{
    private string $configDirectory;
    private bool $debug;
    private ?string $environment;

    public function __construct(string $configDirectory, bool $debug, ?string $environment)
    {
        $this->configDirectory = $configDirectory;
        $this->debug = $debug;
        $this->environment = $environment;
    }

    /**
     * @throws CircularReferenceException|ErrorException|Exception|InvalidConfigException|NotFoundException
     * @throws NotInstantiableException
     */
    public function run(): void
    {
        $config = new Config(
            new ConfigPaths($this->configDirectory),
            $this->environment,
            [
                'params',
                'events',
                'events-web',
                'events-console',
            ],
        );

        $container = new Container(
            $config->get('console'),
            $config->get('providers-console'),
            [],
            $this->debug,
            $config->get('delegates-console')
        );

        $container = $container->get(ContainerInterface::class);

        // Run bootstrap
        $this->runBootstrap($container, $config->get('bootstrap-console'));

        /** @var Application */
        $application = $container->get(Application::class);
        $exitCode = 1;

        try {
            $application->start();
            $exitCode = $application->run(null, new ConsoleBufferedOutput());
        } catch (Error $error) {
            $application->renderThrowable($error, new ConsoleBufferedOutput());
        } finally {
            $application->shutdown($exitCode);
            exit($exitCode);
        }
    }

    private function runBootstrap(ContainerInterface $container, array $bootstrapList): void
    {
        (new BootstrapRunner($container, $bootstrapList))->run();
    }
}