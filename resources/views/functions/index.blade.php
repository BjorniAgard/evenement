@extends('layouts.app')


@section('content')

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Functie</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($functies as $functie)
            <tr>
                <td>{{ $functie->id }}</td>
                <td>{{ $functie->title }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
