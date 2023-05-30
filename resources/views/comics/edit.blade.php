@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Go to comics list</a>
        </div>

        <h2>update your comic: {{ $comic->title }}</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select id="type" name="type" class="form-select">
                    <option></option>
                    <option @selected($comic->type === 'marvel') value="marvel">Marvel</option>
                    <option @selected($comic->type === 'dc') value="dc">DC comics</option>
                    <option @selected($comic->type === 'other') value="other">Other</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Example textarea</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Send</button>
        </form>
    </div>
@endsection