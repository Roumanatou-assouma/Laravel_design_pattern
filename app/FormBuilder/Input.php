<?php

declare(strict_types=1);

namespace App\FormBuilder;

use App\Contracts\ComponentContract;

class Input implements ComponentContract
{
    public function __construct(public readonly string $name, public readonly string $type)
    {
    }

    public function render(): string
    {
        return "<input type='$this->type' name='$this->name'>";
    }
}
