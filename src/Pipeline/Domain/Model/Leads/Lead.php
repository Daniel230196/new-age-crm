<?php

namespace App\Pipeline\Domain\Model\Leads;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Lead
{
    public function __construct(
        private readonly int $id,
        private readonly string $uuid,

    )
    {

    }
}