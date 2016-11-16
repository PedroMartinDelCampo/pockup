function api(url) {
	return Laravel.baseURL + '/api/' + url;
}

function write(target) {
	return function(content) {
		$(target).html(JSON.stringify(content));
	}
}

function Endpoint(name, url, method, request) {
	var action = api(url);
	$('#' + name + '_request').click(function() {
		var target = '#' + name + '_response';
		request(name, getField(name), action, write(target), 'json')
			.fail(write(target));
		return false;
	});
	$('#' + name + '_url').html('( ' + method + ' => ' + action + ' )');
}

function getField(endpoint) {
	return function(name) {
		return $('#' + endpoint + '_' + name).val();
	};
}

Endpoint('access', 'access', 'POST', function(name, field, url, success, type) {
	var data = {};
	data.email = field('email');
	data.password = field('password');
	return $.post(url, data, success, type);
});

Endpoint('create_user', 'users', 'POST', function(name, field, url, success, type) {
	var data = {};
	data.name = field('name');
	data.email = field('email');
	data.password = field('password');
	return $.post(url, data, success, type);
});

Endpoint('list_categories', 'categories', 'GET',
	function(name, field, url, success, type) {
		return $.get(url, {}, success, type);
	}
);

Endpoint('get_category', 'categories/{category}', 'GET',
	function(name, field, url, success, type) {
		var category = field('category');
		return $.get(url.replace('{category}', category), {}, success, type);
	}
);