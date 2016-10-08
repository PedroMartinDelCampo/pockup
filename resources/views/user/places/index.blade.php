@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col s12">
		<a href="{{ url('/places/new') }}" class="button">Nuevo</a>
	</div>
</div>

@if(count($places))
<div class="row">
	<div class="col s12">
		<ul class="collection">
			@foreach($places as $place)
			<li class="collection-item">{{ $place->address }}</li>
			@endforeach
		</ul>
	</div>
</div>
@else
<div class="row">
	<div class="col s12">
		<div class="empty">
			No has registrado lugares.
		</div>
	</div>
</div>
@endif
@endsection