@foreach($produtos as $entity)
    <div>
        <h3>Description :{{ $entity->descricao }}</h3>
        <p>Preço{{ $entity->preco }}</p>
        <p>Category: {{ $entity->categoria->descricao }}</p>
        <a href="{{ url('produtos/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('produtos/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach