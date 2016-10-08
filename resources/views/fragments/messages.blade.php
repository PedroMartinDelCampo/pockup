@if (count($errors) > 0)
<div class="row">
  <div class="col s12">
	 <div class="card-panel red white-text">
	   <span class="card-title">Errores</span>
	     <ul>
			   @foreach($errors->all() as $error)
	       <li>{{ $error }}</li>
			   @endforeach
  	   </ul>
    </div>
	</div>
</div>
@endif