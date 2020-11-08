<div class="container mx-auto portofolio-container pb-10 mt-10">
   <div class="flex justify-between pb-4">
        <h1 class="title">My Portofolio</h1>
        <x-jet-button wire:click="openModal()" class="justify-center hover:bg-blue-700">Create Portofolio</x-jet-button>
   </div>
   <hr class="red-line-port">
   @if ($isModal)
       @include('livewire.portofolio.create')
   @endif

   @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
            <div>
                <p class="text-sm">{{ session('message') }}</p>
            </div>
        </div>
    </div>
    @endif

    
</div>
