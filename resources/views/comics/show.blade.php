@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Go to Comics List</a>
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

        <div class="my-3">
            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Cancel</button>
            </form>

        </div>

    </div>
@endsection