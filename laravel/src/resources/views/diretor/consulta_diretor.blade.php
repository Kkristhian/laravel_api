@extends('mainKristhian')

@section('content')
<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">Código do Diretor</th>
            <th class="col-2">Sigla do Estúdio</th>
            <th class="col-2">Nome do Diretor</th>
            <th class="col-2">Idade</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaDiretor">
    @foreach($diretores as $diretor)
        <tr class='row'>
            <td class="col-2 center">{{ $diretor->Dir_codigo }}</td>
            <td class="col-2 center">{{ $diretor->Est_sigla }}</td>
            <td class="col-2 center">{{ $diretor->Nome_dir }}</td>
            <td class="col-2 center">{{ $diretor->Idade }}</td>
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