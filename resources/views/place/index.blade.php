@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12">
		<a href="{{ route('place.create') }}" class="button">Nuevo</a>
	</div>
</div>
<div class="row">
	<div class="col s12">
		@if(count($places))
		<ul class="collection">
			@foreach($places as $place)
			<li class="collection-item avatar">
				<img src="{{ asset($place->photo) }}" alt="" class="circle">
				<span class="title">{{ $place->name }}</span>
				<br/>
				<span class="description">{{ $place->description }}</span><br/>
				<span class="address">{{ $place->address }}</span>
			</li>
			@endforeach
		</ul>
		@else
		<div class="center-align">
			<span>{{ trans('general.noContent') }}</span>
		</div>
		@endif
	</div>
</div>
@endsection