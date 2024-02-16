<?php

namespace App\View\Components\Helper;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tester extends Component
{
    public $sender;
    public $title;
    public $con;
    public function __construct($sender, $title, $con)
    {
        $this->sender = $sender;
        $this->title = $title;
        $this->con = $con;
    }
    public function getMsg()
    {
        $msg = "alert-warning";
        switch ($this->con) {
            case 'success':
                $msg = 'alert-success';
                break;
            case 'primary':
                $msg = 'alert-primary';
                break;
            default:
                $msg = 'alert-danger';
                break;
        }
        return $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.tester');
    }
}
