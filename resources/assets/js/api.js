function route(url, data) {
	var tmp = url;
	for (var key in data) {
		tmp = tmp.replace('{' + key + '}', data[key]);
	}
	return tmp;
}

function api(url) {
	return Laravel.baseURL + '/api/' + url;
}

function write(target) {
	return function(content) {
		var out = '';
		if (content.responseText) {
			out = content.responseText;
		} else {
			out = content;
		}
		$(target).html(JSON.stringify(out, null, 4));
	}
}

function Endpoint(name, url, method, request) {
	var action = api(url);
	$('#' + name + '_request').click(function() {
		var target = '#' + name + '_response';
		var w = write(target);
		request(name, getField(name), action, w, 'json').fail(w);
		return false;
	});
	$('#' + name + '_url').html('( ' + method + ' => ' + action + ' )');
}

function getField(endpoint) {
	return function(name) {
		return $('#' + endpoint + '_' + name).val();
	};
}

Endpoint('access', 'access', 'POST',
	function(name, field, url, success, type) {
		var data = {};
		data.email = field('email');
		data.password = field('password');
		return $.post(url, data, success, type);
	}
);

Endpoint('create_user', 'users', 'POST',
	function(name, field, url, success, type) {
		var data = {};
		data.name = field('name');
		data.email = field('email');
		data.password = field('password');
		return $.post(url, data, success, type);
	}
);

Endpoint('list_categories', 'categories', 'GET',
	function(name, field, url, success, type) {
		return $.get(url, {}, success, type);
	}
);

Endpoint('get_category', 'categories/{category}', 'GET',
	function(name, field, url, success, type) {
		var data = {};
		data.category = field('category');
		return $.get(route(url, data), {}, success, type);
	}
);

Endpoint('list_events', 'categories/{category}/events', 'GET',
	function(name, field, url, success, type) {
		var data = {};
		data.category = field('category');
		return $.get(route(url, data), {}, success, type);
	}
);

Endpoint('list_groups', 'categories/{category}/groups', 'GET',
	function(name, field, url, success, type){
		var data = {};
		data.category = field('category');
		return $.get(route(url, data), {}, success, type);
	}
);

Endpoint('list_places', 'categories/{category}/places', 'GET',
	function(name, field, url, success, type){
		var data = {};
		data.category = field('category');
		return $.get(route(url, data), {}, success, type);
	}
);

Endpoint('create_group', 'groups', 'POST',
	function(name, field, url, success, type) {
		var data = {};
		data.user = field('user');
		data.name = field('name');
		data.description = field('description');
		data.category = field('category');
		data.is_lucrative = field('is_lucrative');
		return $.post(url, data, success, type);
	}
);

Endpoint('delete_group', 'groups/{group}', 'DELETE',
	function(name, field, url, success, type) {
		var urlData = {};
		urlData.group = field('group');
		var data = {};
		data.user = field('user');
		return $.ajax({
			url: route(url, urlData),
			data: data,
			success: success, 
			dataType: type,
			method: 'DELETE'
		});
	}
);

Endpoint('delete_event', 'events/{event}', 'DELETE',
	function(name, field, url, success, type) {
		var urlData = {};
		urlData.event = field('event');
		var data = {};
		data.user = field('user');
		return $.ajax({
			url: route(url, urlData),
			data: data,
			success: success, 
			dataType: type,
			method: 'DELETE'
		});
	}
);