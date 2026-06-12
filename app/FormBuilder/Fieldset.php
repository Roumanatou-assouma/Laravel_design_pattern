<?php

declare(strict_types=1);

namespace App\FormBuilder;

use App\Abstracts\CompositeComponent;

class Fieldset extends CompositeComponent
{
    public function __construct(public readonly string $legend)
    {
    }

    public function render(): string
    {
        $html = "<fieldset><legend>{$this->legend}</legend>";

        foreach ($this->children as $child) {
            $html .= $child->render();
        }

        $html .= "</fieldset>";

        return $html;
    }
    
}