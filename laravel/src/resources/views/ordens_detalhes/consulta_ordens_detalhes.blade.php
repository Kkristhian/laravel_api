@extends('mainKristhian')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">ID Ordem</th>
            <th class="col-2 center">ID Produto</th>
            <th class="col-2 center">Preco Unitario</th>
            <th class="col-2 center">Quantidade</th>
            <th class="col-2 center">Desconto</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaOrdem">
    @foreach($ordens as $ordem)
        <tr class='row'>
            <td class="col-2 center">{{ $ordem->IDOrdem }}</td>
            <td class="col-2 center">{{ $ordem->IDProduto }}</td>
            <td class="col-2 center">{{ $ordem->PrecoUnitario }}</td>
            <td class="col-2 center">{{ $ordem->Quantidade }}</td>
            <td class="col-2 center">{{ $ordem->Desconto }}</td>
            <td class="col-2 center">
                <a href="">
                    <i  class="btn btn-primary"><span class="glyphicon glyphicon-refresh">Update</span></i>
                </a>
                <a href="">
                    <i class="btn btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection