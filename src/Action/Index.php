<?php

declare(strict_types=1);

namespace Simple\App\Action;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\ViewRenderer;

final class Index
{
    public function run(ResponseFactoryInterface $responseFactory): ResponseInterface
    {
        $response = $responseFactory->createResponse();

        $response->getBody()->write(
            'Hello World' . "<br>" . 'My first website with ' . "<strong>" . 'Yii 3.0!' . "</strong>"
        );

        return $response;
    }
}
