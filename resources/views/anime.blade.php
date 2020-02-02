@extends('layout.main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Anime</h1>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="row">#</th>
                <th>Title</th>
                <th>Score</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anime as $a)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $a->title }}</td>
                <td>{{ $a->score }}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection