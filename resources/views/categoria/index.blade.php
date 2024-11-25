@foreach($categorias as $entity)
    <div>
        <h3>{{ $entity->descricao }}</h3>
        <a href="{{ url('categorias/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('categorias/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach