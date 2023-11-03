<x-layout>
    <x-navbar/>
    <h1>lista fumetti</h1>
    <div class="container">
        <div class="row">
            @foreach ($fumetti as $item)
            <x-card :data="$item"/>
            @endforeach    
            
        </div>
    </div>
</x-layout>