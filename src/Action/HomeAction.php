<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

final class HomeAction
{
    public function run(ResponseFactoryInterface $responseFactory): ResponseInterface
    {
        $response = $responseFactory->createResponse();

        $response->getBody()->write(
            'Hello World' . '<br>' . 'My first website with ' . '<strong>' . 'Yii 3.0!' . '</strong>'
        );

        return $response;
    }
}
