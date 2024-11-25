<form action="{{ url('categorias') }}" method="POST">
    @csrf
    <input type="text" name="descricao" placeholder="Description" required>
    <button type="submit">Create category</button>
</form>