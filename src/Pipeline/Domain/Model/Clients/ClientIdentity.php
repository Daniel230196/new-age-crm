<?php

declare(strict_types=1);

namespace App\Pipeline\Domain\Model\Clients;

class ClientIdentity
{
    public function __construct(private readonly string $uuid){}

    public function uuid(): string
    {
        return $this->uuid;
    }
}