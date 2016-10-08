@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="row">
    <div class="col s12">
        <form method="POST" action="{{ url('/password/email') }}">
            <div class="input">
                <label for="email">{{ trans('auth.email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="input center">
                <button type="submit" class="button">
                    {{ trans('auth.sendPassword') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
