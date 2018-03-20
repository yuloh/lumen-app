<?php

declare(strict_types=1);

namespace App\Entities;

class Profile
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var Scientist
     */
    public $scientist;

    public function __construct(Scientist $scientist)
    {
        $this->scientist = $scientist;
    }
}
