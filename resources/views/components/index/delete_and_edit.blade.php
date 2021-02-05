<div class="d-flex">
<form action="{{ $url }}" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
	@csrf
	@method('DELETE')
	<input class="btn btn-outline-danger mt-2" type="submit" value="Deletar">
</form>

  @isset($edit_url)
    <a href="{{ $edit_url }}" class="btn btn-outline-primary ml-auto mt-2">Editar</a>
  @endisset
</div>
