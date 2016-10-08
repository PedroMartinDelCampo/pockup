<?php $menu = 'fragments.menu.' . (Auth::guest() ? 'guest' : 'auth') ?>

<nav>
    <div class="nav-wrapper">
      	<a href="{{ url('/') }} " class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
      	<a href="#" data-activates="sidebar" class="button-collapse"><i class="	material-icons">menu</i></a>
      	<ul class="right hide-on-med-and-down">
        	@include($menu)
      	</ul>
      	<ul class="side-nav" id="sidebar">
        	@include($menu)
  		</ul>
	</div>
</nav>