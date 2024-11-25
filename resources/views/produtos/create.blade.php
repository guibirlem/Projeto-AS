<!-- <form action="{{ url('produtos') }}" method="POST">
    @csrf
    <input type="text" name="descricao" placeholder="Descrição" required>
    <input type="text" name="preco" placeholder="Preço" required>
    <button type="submit">Create Produto</button>
</form> -->

<form action="{{ url('produtos') }}" method="POST">
        @csrf
        <input type="text" name="descricao" placeholder="Description" required>
        <input type="text" name="preco" placeholder="Price" required>
        <label for="categoria">Category</label>
        <select id="categoria" name="categoria_id" required>
            <option value="">Chose a Category</option>
            @foreach($categorias as $ccc)
                <option value="{{ $ccc->id }}">{{ $ccc->descricao }}</option>
            @endforeach
        </select>
        <button type="submit">Create Product</button>
    </form>