@extends('layout')

@section('content')
    
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    
    @if(count($guitars) > 0)
        @foreach($guitars as $guitar)

            <div>
                <h3>
                    <a href="{{ route('guitars.show', ['guitar'=> $guitar['id']]) }}"> {{$guitar['name']}}</a>  
                </h3>
                <ul>
                    <li>
                        Made by: {{ $guitar['brand'] }}
                    </li>
                    <li>
                        Year made : {{ $guitar['year_made'] }}
                    </li>
                </ul>
            </div>

        @endforeach
    @else    
        <h2>There are no guitars to display</h2>
    @endif
    <div>
        User input: {{ $userInput }}
    </div>

</div>

@stop