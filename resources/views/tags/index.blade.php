@extends('layouts.main')

@section('title', 'Tag')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Posts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('tags.show', $tag->id) }}">Vedi post associati</a>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
