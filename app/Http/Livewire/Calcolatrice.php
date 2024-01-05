<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calcolatrice extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public $action = '+';
    public $result = 0;

    public function render()
    {
        return view('livewire.calcolatrice');
    }
    public function calcola()
    {
        $num1 = $this->number1;
        $num2 = $this->number2;
        if ($this->action === '-') {
            $this->result = $num1 - $num2;
        } else if ($this->action === '+') {
            $this->result = $num1 + $num2;
        } else if ($this->action === '/') {
            $this->result = $num1 / $num2;
        } else if ($this->action === '*') {
            $this->result = $num1 * $num2;
        } else if ($this->action === '%') {
            $this->result = $num1 / 100 * $num2;
        }
    }
}
