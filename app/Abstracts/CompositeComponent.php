<?php

declare(strict_types=1);

namespace App\Abstracts;

use App\Contracts\ComponentContract;

abstract class CompositeComponent implements ComponentContract
{
    public array $children = [];

    public function __addchild(ComponentContract $child): void
    {
        $this->children[] = $child;
    }
}