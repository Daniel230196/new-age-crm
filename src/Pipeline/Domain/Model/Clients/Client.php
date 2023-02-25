<?php

declare(strict_types=1);

namespace App\Pipeline\Domain\Model\Clients;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Client
{
    public function __construct(
        private readonly int $id,
        private readonly ClientIdentity $identity,
        private readonly ?string $phone,
        private readonly ?string $email,
        private readonly ?string $test
    )
    {
    }
}