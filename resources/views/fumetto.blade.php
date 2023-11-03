<x-layout>
    <x-navbar/>

    <h1>{{$data['titolo']}}</h1>
    <h3>{{$data['autore']}}, {{$data['disegnatore']}}</h3>
    <img src="{{$data['img1']}}" alt="">
    <img src="{{$data['img2']}}" alt="">
    <img src="{{$data['img3']}}" alt="">
</x-layout>