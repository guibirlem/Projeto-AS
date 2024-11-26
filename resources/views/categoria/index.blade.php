<style>

    body{
        background-image: url('../images/image.jpg');
    }
    .container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            box-sizing: border-box;
            max-width: 90%;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        p, a{
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #555;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
        }
        .input{
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #004494;
        }
</style>
<h3>CATEGORIES</h3>
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