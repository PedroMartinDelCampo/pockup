@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12">
		<form method="POST" action="{{ url('/places') }}">
			@include('fragments.user.editPlace')
		</form>
	</div>
</div>
@endsection