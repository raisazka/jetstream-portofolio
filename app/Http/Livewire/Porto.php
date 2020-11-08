<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Portofolio;

class Porto extends Component
{
    use WithFileUploads;

    public $portofolios, $portofolio_id, $title, $description, $image;
    public $portofolio;

    public $isModal = false, $showModal = false;

    public function render()
    {
        $this->portofolios = Portofolio::all();
        return view('livewire.portofolio');
    }

    //FUNGSI INI UNTUK ME-RESET FIELD/KOLOM, SESUAIKAN FIELD APA SAJA YANG KAMU MILIKI
    public function resetFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }

    //Close Modal Function
    public function closeModal() {
        $this->isModal = false;
    }

    //Close Modal Function
    public function closeShowModal() {
        $this->showModal = false;
    }

    //Open Modal Function
    public function openModal() {
        $this->isModal = true;
    }

    //Open Modal Function
    public function openShowModal() {
        $this->showModal = true;
    }

    public function store() {

        $this->validate([
            'title' => 'required|string|min:5',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        
        //Fungsi untuk menyimpan atau mengupdate data
        //Jika Id tersedia, maka update data
        //Jika tidak, buat data baru
        Portofolio::updateOrCreate(['id' => $this->portofolio_id], [
            'title' => $this->title,
            'description' => $this->description,
            'portofolio_image' => $this->image->storePublicly('portofolio-image', 'public'),
        ]);
        //Buat message untuk menampilkan sudah di update atau buat baru
        session()->flash('message', $this->portofolio_id ? $this->title . ' Diperbaharui': 'Portofolio Baru Ditambahkan');

        $this->closeModal();
        $this->resetFields();
    }

    public function show($id) {
        $this->portofolio = Portofolio::find($id);
        $this->openShowModal();
    }

}
