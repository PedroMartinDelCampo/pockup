@extends('layouts.app')

@section('content')
<div class="row">
    <form method="POST" action="{{ url('/password/reset') }}">

        <div class="input">
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" value="{{ $email or old('email') }}">
        </div>
        <div class="input">
            <label for="password">Contraseña:</label>
            <input id="password" type="password" name="password">
        </div>
        <div class="input">
            <label for="password-confirm">Repite la contraseña:</label>
            <input id="password-confirm" type="password" name="password_confirmation">
        </div>
        <div class="input center">
            <button type="submit" class="button">
                Cambiar contraseña
            </button>
        </div>
    </form>
</div>
@endsection
