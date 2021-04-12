<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use Simple\App\Tests\AcceptanceTester;

final class ErrorCest
{
    public function testErrorPage(AcceptanceTester $I): void
    {
        $I->amGoingTo('go to the error page');
        $I->amOnPage('/about');

        $I->wantTo('see error page.');
        $I->see('We were unable to find the page /about.');
    }
}
