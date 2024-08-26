<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $data;

    public function __construct($headers = [], $data = [])
    {
        $this->headers = $headers;
        $this->data = $data;
    }

    public function render()
    {
        return view('components.table', [
            'headers' => $this->headers,
            'data' => $this->data,
        ]);
    }
}