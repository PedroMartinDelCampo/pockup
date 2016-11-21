<li>
	<div class="collapsible-header">Crear grupo <span id="create_group_url"></span></div>
	<div class="collapsible-body">
		<form>
			<div class="input-field">
				<label for="create_group_user">Usuario (user)</label>
				<input type="number" name="create_group_user" id="create_group_user" />
			</div>
			<div class="input-field">
				<label for="create_group_name">Nombre (name)</label>
				<input type="text" name="create_group_name" id="create_group_name" />
			</div>
			<div class="input-field">
				<label for="create_group_description">Descripción (description)</label>
				<input type="text" name="create_group_description" id="create_group_description" />
			</div>
			<div class="input-field">
				<label for="create_group_category">Category (category)</label>
				<input type="number" name="create_group_category" id="create_group_category" />
			</div>
			<div class="input-field">
				<label for="create_group_is_lucrative">Es lucrativo (is_lucrative) 0 = NO, 1 = SI</label>
				<input type="number" name="create_group_is_lucrative" id="create_group_is_lucrative" />
			</div>
			<button type="button" class="btn primary" id="create_group_request">Enviar</button>
			<div id="create_group_response">
				
			</div>
		</form>
	</div>
</li>