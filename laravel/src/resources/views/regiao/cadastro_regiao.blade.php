@extends('mainKristhian')

@section('content')

<form action="/api/regiao" method="POST">
        <div class="form-group">
            <label for="IDRegiao">ID Região:</label>
            <input type="number" required readonly value="{{ $id }}" name="IDRegiao" id="IDRegiao" class="form-control" placeholder="IDRegião">
        </div>
        <div class="form-group">
            <label for="DescricaoRegiao">Descricao Regiao:</label>
            <input type="text" required name="DescricaoRegiao" id="DescricaoRegiao" class="form-control" placeholder="Região">
        </div>
        <div class="form-group">
        <button type="submit" id="cadastrar" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>


@endsection