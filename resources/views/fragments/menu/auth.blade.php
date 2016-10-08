<li>
	<form id="logout" action="{{ url('/logout') }}" method="POST">
		<a data-submit="logout">{{ trans('auth.logout') }}</a>
	</form>
</li>