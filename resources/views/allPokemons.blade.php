<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
    <h1 class="mb-5">Tutti i pokemon</h1>

    @foreach($all as $pokemon)
        <x-cards class="cards" name="{{$pokemon['name']}}"></x-cards>
    @endforeach
        </div>
    </div>
</x-layout>