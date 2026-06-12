<?php

declare(strict_types=1);

namespace App\FormBuilder;

use App\Abstracts\CompositeComponent;

class Form extends CompositeComponent
{
    public function __construct(public readonly string $title)
    {
    }

    public function render(): string
    {
        $html = "<form><h1>{$this->title}</h1>";

        foreach ($this->children as $child) {
            $html .= $child->render();
        }

        $html .= "</form>";

        return $html;
    }
    
}