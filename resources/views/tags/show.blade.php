@extends('layouts.main')

@section('title', 'Post Associati')

@section('content')

<div class="container">
    <div class="row">
        <h3 class="mt-4 mb-4">Post associati al tag: {{ '#' . $tag->name }}</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag->posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->postInformation->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection
