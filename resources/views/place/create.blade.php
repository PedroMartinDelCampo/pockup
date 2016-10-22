@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col s12">
		<form method="POST" action="{{ route('place.store') }}" enctype="multipart/form-data">
			@include('fragments.place.edit')
		</form>
	</div>
</div>
@endsection