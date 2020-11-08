<div class="container mx-auto portofolio-container pb-10">
   <div class="title-container pb-4">
        <h1 class="title">My Portofolio</h1>
        <x-jet-button wire:click="openModal()" class="justify-center hover:bg-blue-700">Create Portofolio</x-jet-button>
   </div>
   <hr class="red-line-port">
   @if ($isModal)
       @include('livewire.portofolio.create')
   @endif
</div>
