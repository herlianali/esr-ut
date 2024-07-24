<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $class, $prefix, $name, $caption, $value, $options, $default;
    public function __construct(
        $class = null,
        $prefix = null,
        $name = null,
        $caption = '-Pilih-',
        $value = '',
        $options = [],
        $default = ''
    )
    {
        $this->class = $class;
        $this->prefix = $prefix;
        $this->name = $name;
        $this->caption = $caption;
        $this->value = $value;
        $this->options = $options;
        $this->default = $default;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
