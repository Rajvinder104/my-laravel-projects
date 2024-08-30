<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;

class alert extends Component
{
    // ess da nava trika v hai
    public $type;
    public $dismissible;

    protected  $values =
    [
        "danger",
        'info',
        'success'
    ];


    // public function __construct(public string $type = "warning", public string $message = "No Message")
    // {
    //    //  $this->type1 = $type ;
    //    //  $this->message1 = $message ;
    // }


    public function __construct(string $type = "warning", $dismissible = false)
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    public function validTypes()
    {
        return in_array($this->type, $this->values) ? $this->type : 'primary';
    }
    public function link($text ='view', $target = '#')
    {

        return new HtmlString('<a href="' . $target . '" class="alert-link">' . $text . '</a>');
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
