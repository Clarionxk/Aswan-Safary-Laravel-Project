@include('home.header')
<link rel="stylesheet" href="home/css/style.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="/">Home</a>
       
      

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                
            </div>
        </div>
    </div>
    

    @include('home.footer')
