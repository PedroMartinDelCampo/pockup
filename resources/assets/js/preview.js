$('#photo').change(function() {
	var file = this.files[0];
	if (file) {
		var reader = new FileReader();
		reader.onload = function(evt) {
			$('#preview').prop('src', evt.target.result);
			Materialize.fadeInImage('#preview');
		};
		reader.readAsDataURL(file);
	}
});