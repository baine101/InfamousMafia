@extends('app')

@section('content')
    <div class="content">
        <div class="title">Infamous Mafia</div>

       @if($first == 'fox')

        <div><p>About me : {{$first}} {{$last}}</p> </div>

       @else
            <div><p>About me 123</p> </div>
       @endif
    

    </div>
@stop
