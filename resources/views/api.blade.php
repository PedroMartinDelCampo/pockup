@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
	    	
	    	@include('fragments.api.access')
		    
		    @include('fragments.api.create_user')

		    @include('fragments.api.list_categories')
		    
		    @include('fragments.api.get_category')

		    @include('fragments.api.list_events')

		    @include('fragments.api.list_groups')
		    
		    @include('fragments.api.list_places')
		    
		    @include('fragments.api.create_group')

		    @include('fragments.api.delete_group')

		    @include('fragments.api.delete_event')

	  	</ul>
	</div>
</div>
@endsection