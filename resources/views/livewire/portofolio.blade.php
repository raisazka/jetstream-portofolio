<div class="container mx-auto portofolio-container pb-10 mt-10">
   <div class="flex justify-between pb-4">
        <h1 class="title">My Portofolio</h1>
        <x-jet-button wire:click="openModal()" class="justify-center hover:bg-blue-700">Create Portofolio</x-jet-button>
   </div>
   <hr class="red-line-port">

   @if ($isModal)
       @include('livewire.portofolio.create')
   @endif

   @if($showModal)
        @include('livewire.portofolio.show')
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

    <div class="flex flex-wrap">
        @foreach ($portofolios as $porto)
        <div class="max-w-sm rounded overflow-hidden shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3">
        <img class="w-full" src="{{asset('storage/'.$porto->portofolio_image)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$porto->title}}</div>
              <p class="text-gray-700 text-base">
                {{$porto->description}}
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <x-jet-button wire:click="show({{$porto->id}})" style="display: block !important;" class="w-full m-auto">View more</x-jet-button>
              <x-jet-button wire:click="edit({{$porto->id}})" style="display: block !important;" class="w-full m-auto mt-2 bg-green-800">Edit</x-jet-button>
            </div>
        </div>
        @endforeach
    </div>
    

</div>
