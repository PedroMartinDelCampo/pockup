@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col s12 m6 l3">
  	<a href="{{ route('place.index') }}">
	    <div class="card hoverable center-align">
	      <div class="card-content">
		  	<span class="card-title">
		  		Lugares
			</span>
	      </div>
	  	</div>
  	</a>
  </div>
</div>
@endsection
