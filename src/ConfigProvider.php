<?php
declare(strict_types=1);

namespace HtLeagueOauthClientModule;

class ConfigProvider
{
    const CONFIG = 'ht_league_oauth_client';

    /**
     * {@inheritDoc}
     */
    public function __invoke()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
