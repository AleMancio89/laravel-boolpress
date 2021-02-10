@extends('layouts.main')

@section('title', 'Posts')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->postInformation->description }}</td>
                    <td>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tags.show', $tag->id) }}">{{ '#' . $tag->name }}</a>
                        <br/>
                    @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary bg-gradient" href="{{ route('posts.edit', $post) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class ="btn btn-danger" value="Elimina" type="submit">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
