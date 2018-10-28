@extends('mainKristhian')

@section('content')

<form action="/api/ordens_detalhes" method="POST">
        <div class="form-group">
            <label for="IDOrdem">ID Ordem:</label>
            <input type="number" required readonly value="{{ $id }}" name="IDOrdem" id="IDOrdem" required class="form-control" placeholder="IDOrdem">
        </div>
        <div class="form-group">
            <label for="IDProduto">ID Produto:</label>
            <input type="text" name="IDProduto" id="IDProduto" required class="form-control" placeholder="IDProduto">
        </div>
        <div class="form-group">
            <label for="PrecoUnitario">ID Preco Unitario:</label>
            <input type="text" name="PrecoUnitario" id="PrecoUnitario" required class="form-control" placeholder="PrecoUnitario">
        </div>
        <div class="form-group">
            <label for="Quantidade">Quantidade:</label>
            <input type="text" name="Quantidade" id="Quantidade" required class="form-control" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="Desconto">Desconto:</label>
            <input type="text" name="Desconto" id="Desconto" required class="form-control" placeholder="Desconto">
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection