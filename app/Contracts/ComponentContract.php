<?php

declare(strict_types=1);

namespace App\Contracts;

interface ComponentContract
{
    public function render(): string;
}