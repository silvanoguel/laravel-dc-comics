@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>DETAILS:  {{ $comic->title }}</h2>
        <img class="w-10" src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Type: </strong> {{ $comic->type }}
            </li>
            <li class="list-group-item">
                <strong>Series: </strong> {{ $comic->series }}
            </li>
            <li class="list-group-item">
                <strong>Sale Date: </strong> {{ $comic->sale_date }}
            </li>
            <li class="list-group-item">
                <strong>Price: </strong> {{ $comic->price }}
            </li>
            <li class="list-group-item">
                <strong>Description: </strong> {{ $comic->description }}
            </li>
        </ul>
    </div>
@endsection