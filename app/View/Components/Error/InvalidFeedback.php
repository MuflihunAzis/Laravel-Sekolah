<?php

namespace App\View\Components\Error;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InvalidFeedback extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $fieldName,
    ){
        //
    }

    public function shouldRender(): bool
    {
        return isset($this->fieldName);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.error.invalid-feedback');
    }
}
