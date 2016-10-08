@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s12">
        <form action="{{ url('/login') }}" class="row" method="POST">
            <div class="input">
                <input id="email" type="email" name="email">
                <label for="email">{{ trans('auth.email') }}</label>
            </div>
            <div class="input">
                <input id="password" type="password" name="password">
                <label for="password">{{ trans('auth.password') }}</label>
            </div>
            <div class="input">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember">{{ trans('auth.keepSession') }}</label>
            </div>
            <div class="input center">
                <button type="submit" class="button">
                    {{ trans('auth.login') }}
                </button>
                <a href="{{ url('/password/reset') }}" class="button">
                    {{ trans('auth.forgotPassword') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
