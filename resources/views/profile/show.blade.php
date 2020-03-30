@extends('layouts.app')


@section('content')

<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naam</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefoon</th>
      <th scope="col">Functies</th>
      <th scope="col">Rol</th>
      <th scope="col">Actie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ Auth::user()->id }}</td>
      <td>{{ Auth::user()->name }}</td>
      <td>{{ Auth::user()->email }}</td>
      <td>{{ Auth::user()->telephone }}</td>
      <td>@if (auth::user()->function_id === 1) Barkeeper
          @elseif (auth::user()->function_id === 2) Receptie
          @elseif (auth::user()->function_id === 3) Ober
          @else Gastheer/vrouw
          @endif
      </td>
      <td>@if( Auth::user()->user_role_id  === 1)Admin
        @else User
        @endif
    </td>
    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Wijzigen</a> <form action="{{route('users.destroy', $user->id) }}" method="POST">
        @csrf
    @method('DELETE')
    <button type="submit" class="mt-2 btn btn-danger">Verwijderen </td>
    </tr>
  </tbody>
</table>
    <a href="{{ route('functions.create') }}" class="btn btn-primary ml-2">Functies aanmaken</a>
    <a href="{{ route('functions.index') }}" class="btn btn-info mr-2">Laat alle functies zien</a>
</div>
@endsection

