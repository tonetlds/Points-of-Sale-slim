<form action="pos_getfilters" class="form-group" id="pos_filters">
	
	<select name="pos_state" id="pos_states" data-filter="states" title="Selecione o estado" class="form-control animated slideIn">
		<option value="">Selecione o estado:</option>		
	</select>

	<select name="pos_city" id="pos_cities" data-filter="cities" title="Selecione a cidade" class="form-control animated slideIn">
		<option value="">Cidade</option>		
	</select>

	<select name="pos_neighborhood" id="pos_neighborhoods" data-filter="neighborhoods" title="Selecione o bairro" class="form-control animated slideIn">
		<option value="">Bairro</option>		
	</select>

	<!-- <select name="pos_states" id="pos_categories" data-filter="stores" title="Selecione o tipo de loja" class="form-control animated slideIn">
		<option value="">Tipo de Loja</option>		
	</select> -->
	<div class="pos_loading">
		<a class="rect1">|</a>
		<a class="rect2">|</a>
		<a class="rect3">|</a>
		<a class="rect4">|</a>
		<a class="rect5">|</a>
	</div>
</form>

<br>

<div id="pos_results"></div>