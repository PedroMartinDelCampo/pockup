<div class="row">
	<div class="col s12">
  		<ul class="tabs">
        	<li class="tab col s3"><a class="active" href="#basic">
        		Información general
    		</a></li>
        	<li class="tab col s3"><a href="#contact">
        		Información de contacto
    		</a></li>
        	<li class="tab col s3"><a href="#geo">
        		Ubicación
    		</a></li>
        	<li class="tab col s3"><a href="#pricing">
        		Precios
    		</a></li>
      	</ul>
	</div>
    <div id="basic" class="col s12">
    	@include('fragments.place.basic')
    </div>
    <div id="contact" class="col s12">
    	@include('fragments.place.contact')
    </div>
    <div id="geo" class="col s12">
    	@include('fragments.place.geo')
    </div>
    <div id="pricing" class="col s12">
    	@include('fragments.place.pricing')
    </div>
</div>
<div class="input center-align">
	<div class="col s6">
		<button type="submit" class="button">Guardar</button>
	</div>
	<div class="col s6">
		<a href="{{ route('place.index') }}" class="btn-flat waves-effect">Cancelar</a>
	</div>
</div>