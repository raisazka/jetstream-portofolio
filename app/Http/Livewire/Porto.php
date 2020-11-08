<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Portofolio;

class Porto extends Component
{
    public $isModal = false;

    public function render()
    {
        return view('livewire.portofolio');
    }

    //Close Modal Function
    public function closeModal() {
        $this->isModal = false;
    }

    //Open Modal Function
    public function openModal() {
        $this->isModal = true;
    }

}
