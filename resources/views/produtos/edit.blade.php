<form action="{{ url('produtos/'.$produtos->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="descricao" placeholder="Description" value="{{ $produtos->descricao }}" required>
    <input type="text" name="preco" placeholder="Price" value="{{ $produtos->preco }}" required>
    <button type="submit">Update Product</button>
</form>