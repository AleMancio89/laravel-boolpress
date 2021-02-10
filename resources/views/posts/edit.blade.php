@extends('layouts.main')

@section('title', 'Modifica post')

@section('content')
<div class="container ">
    <h3 class="mt-4 mb-4">Modifica post: {{ $post->title }}</h3>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control form-control-sm" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Autore</label>
            <input type="text" class="form-control form-control-sm" name="author" value="{{ $post->author }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category_id">
                <option>.....</option>
                @foreach ($categories as $category)
                <option {{ $post->category->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control" type="text" name="description">{{ $post->postInformation->description }}</textarea>
        </div>
        <p class="form-label">Seleziona i #tag</p>
        @foreach ($tags as $tag)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
            @foreach ($post->tags as $singleTag)
                @if ($tag->id == $singleTag->id)
                    checked
                @endif
            @endforeach>
            <label class="form-check-label">{{ $tag->name }}</label>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</div>
@endsection
