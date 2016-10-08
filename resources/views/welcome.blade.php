@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col s12">
        @include('fragments.carousel')
    </div>
    <div class="col s12 center">
    	<div class="gap vertical">&nbsp;</div>
    	<div class="gap vertical">&nbsp;</div>
    	<div class="gap vertical">&nbsp;</div>
    	<a href="{{ url('/login') }}" class="button">
            {{ trans('auth.doLogin') }}   
        </a>
        {{ trans('auth.or') }}   
    	<a href="{{ url('/register') }}" class="button">
            {{ trans('auth.doRegister') }}
        </a>
    </div>
</div>
@endsection