@extends('layout')

@section('content')
    
<div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
    <form class= "form-bg-white p-6 border-1" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="text-sm" for="name">Guitar name</label>
            <input class="text-lg border-1" type="text" id="name" value="{{$guitar->name}}" name="name">
            @error('guitar-name')
                <div class="form-error">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="brand">Brand</label><br>
            <input class="text-lg border-1" type="text" id="brand" name="brand" value="{{ $guitar->brand}}">
            @error('brand')
                <div class="form-error">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="year_made">Year made</label><br>
            <input class="text-lg border-1" type="text" id="year_made" name="year_made" value="{{ $guitar->year_made}}">
            @error('year')
                <div class="form-error">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div>
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>
</div>

@stop