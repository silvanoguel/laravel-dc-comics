@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Go to comics list</a>
        </div>

        <h2>EDIT YOUR COMIC: {{ $comic->title }}</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select id="type" name="type" class="form-select @error('type') is-invalid @enderror">
                    <option></option>
                    <option @selected(old ('type', $comic->type) === 'marvel') value="marvel">Marvel</option>
                    <option @selected(old ('type',$comic->type) === 'dc') value="dc">DC comics</option>
                    <option @selected(old ('type',$comic->type) === 'other') value="other">Other</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
