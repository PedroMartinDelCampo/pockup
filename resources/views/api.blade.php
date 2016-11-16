@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
	    	
	    	@include('fragments.api.access')
		    
		    @include('fragments.api.create_user')

		    @include('fragments.api.list_categories')
		    
		    @include('fragments.api.get_category')

		    <li>
		      	<div class="collapsible-header">Listar eventos</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
		    <li>
		      	<div class="collapsible-header">Listar grupos</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
		    <li>
		      	<div class="collapsible-header">Listar lugares</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
		    <li>
		      	<div class="collapsible-header">Crear grupo</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
		    <li>
		      	<div class="collapsible-header">Borrar grupo</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
		    <li>
		      	<div class="collapsible-header">Borrar evento</div>
		      	<div class="collapsible-body">
		      		<p>Lorem ipsum dolor sit amet.</p>
	      		</div>
		    </li>
	  	</ul>
	</div>
</div>
@endsection