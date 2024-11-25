<form action="{{ url('categorias/'.$categorias->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="descricao" placeholder="Description" value="{{ $categorias->descricao }}" required>
    <button type="submit">Update category</button>
</form>