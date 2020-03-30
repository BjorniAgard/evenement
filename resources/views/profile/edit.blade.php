@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('users.update', auth::user()->id ) }}"method="POST">
            @csrf
            @method('PATCH')
            <hr class="divisor">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}"required>
            </div>
            <div class="form-group">
                <label for="telephone">Telefoon</label>
                <input type="text" name="telephone" class="form-control" value="{{ Auth::user()->telephone }}"required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}"required>
            </div>
            <div class="form-group">
                    <label for="function">Functie:</label>
                    <div id="custom-search-input">
                        <select class="form-control" name="function_id">
                            <option value="1" {{ $user->function_id === 1 ? 'selected' : ''}}>Barkeeper</option>
                            <option value="2" {{ $user->function_id === 2 ? 'selected' : ''}}>Receptie</option>
                            <option value="3" {{ $user->function_id === 3 ? 'selected' : ''}}>Ober</option>
                            <option value="4" {{ $user->function_id === 4 ? 'selected' : ''}}>Gastheer/vrouw</option>
                        </select>
                    </div>

            <button type="submit" class="mt-3 btn btn-primary topBtn">Updaten</button>
        </form>
    </div>
</div>

@endsection
