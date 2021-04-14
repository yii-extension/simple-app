<?php

declare(strict_types=1);

namespace Simple\App\Runner;

use Psr\Container\ContainerInterface;
use Yiisoft\Config\Config;
use Yiisoft\Di\Container;
use Yiisoft\Yii\Console\Application;
use Yiisoft\Yii\Console\Output\ConsoleBufferedOutput;

/**
 * @codeCoverageIgnore
 */
final class ApplicationConsoleRunner
{
    public function run(): void
    {
        $config = new Config(
            dirname(__DIR__, 2),
            '/config/packages', // Configs path.
        );

        /** @psalm-suppress MixedArgumentTypeCoercion */
        $container = new Container(
            $config->get('console'),
            $config->get('providers-console')
        );

        $container = $container->get(ContainerInterface::class);

        /** @var Application */
        $application = $container->get(Application::class);
        $exitCode = 1;

        try {
            $application->start();
            $exitCode = $application->run(null, new ConsoleBufferedOutput());
        } catch (\Error $error) {
            $application->renderThrowable($error, new ConsoleBufferedOutput());
        } finally {
            $application->shutdown($exitCode);
            exit($exitCode);
        }
    }
}
