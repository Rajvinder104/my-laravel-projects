<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;

class alert extends Component
{
    // ehh saare member variable hun
    public $type;
    public $message;
    public $dismissible;
    // END ehh saare member variable hun


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


    public function __construct(string $types = "warning",  string $messages = "No Message", $dismissible = false)
    {
        $this->type = $types;
        $this->message = $messages;
        $this->dismissible = $dismissible;
    }

    public function validTypes()
    {
        return in_array($this->type, $this->values) ? $this->type : 'primary';
    }


    public function link($text, $target = '#')
    {

        return new HtmlString('<a href="' . $target . '" class="alert-link">' . $text . '</a>');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
