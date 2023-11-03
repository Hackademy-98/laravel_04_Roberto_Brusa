<div class="col-4">
    <div>
        <img class="img1" src="{{$data['img1']}}" alt="">
        @if($data['titolo'])
        <a href="{{route('fumetto',['nome'=>$data['titolo']])}}">
            <h1>{{$data['titolo']}}</h1>
        </a>
        @endif
        <p>{{$data['autore']}}, {{$data['disegnatore']}}</p>
        <p>{{$data['casaProduttrice']}}</p>
    </div>
</div>