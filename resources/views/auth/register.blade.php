@extends('layouts.app')

@section('content')
<div class="row">
    <form class="col s12" method="POST" action="{{ url('/register') }}">
        <div class="row">

            <div class="input">
                <input id="name" type="text" name="name">
                <label for="name">{{ trans('auth.name') }}</label>
            </div>

            <div class="input">
                <input id="email" type="email" name="email">
                <label for="email">{{ trans('auth.email') }}</label>
            </div>

            <div class="input">
                <input id="password" type="password" name="password">
                <label for="password">{{ trans('auth.password') }}</label>
            </div>
            
            <div class="input">
                <input id="password-confirmation" type="password" name="password_confirmation">
                <label for="password-confirmation">
                    {{ trans('auth.passwordConfirmation') }}
                </label>
            </div>

            <div class="input">
                <select id="category" name="category" placeholder="{{ trans('auth.select') }}">
                    @foreach($categories as $category)
                    <option value="{{ $category }}">
                        {{ $category }}
                    </option>
                    @endforeach
                </select>
                <label for="category">{{ trans('auth.category') }}</label>
            </div>

            <div class="input center">
                <button type="submit" class="button">
                    {{ trans('auth.doRegister') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
