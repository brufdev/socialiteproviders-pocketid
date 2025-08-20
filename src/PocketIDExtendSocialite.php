<?php

namespace brufdev\SocialiteProvidersPocketID;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PocketIDExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('pocketid', Provider::class);
    }
}
