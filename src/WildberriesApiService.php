<?php

declare(strict_types=1);

namespace Everully\LaravelWildberriesSdk;

use Everully\PhpWildberriesSdk\Connectors\ContentWildberriesConnector;
use Everully\PhpWildberriesSdk\Connectors\StatisticsWildberriesConnector;

class WildberriesApiService
{
    public function __construct(
        private string $token,
        private readonly bool $sandbox = false,
    ) {}

    public function setToken(string $token): static
    {
        $this->token = $token;

        return $this;
    }

    public function content(): ContentWildberriesConnector
    {
        return new ContentWildberriesConnector(
            token: $this->token,
            sandbox: $this->sandbox,
        );
    }

    public function statistics(): StatisticsWildberriesConnector
    {
        return new StatisticsWildberriesConnector(
            token: $this->token,
            sandbox: $this->sandbox,
        );
    }
}
