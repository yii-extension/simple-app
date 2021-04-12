<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use Simple\App\Tests\AcceptanceTester;

final class IndexCest
{
    public function testIndexPage(AcceptanceTester $I): void
    {
        $I->amGoingTo('go to the index page');
        $I->amOnPage('/');

        $I->expectTo('see page index.');
        $I->see('Hello World');
        $I->see('My first website with Yii 3.0!');
    }
}
