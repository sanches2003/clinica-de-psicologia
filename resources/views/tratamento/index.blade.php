<x-app-layout>
    <h2>Gerenciar Tratamentos</h2>
    <a href="/tratamento/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data Início</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tratamentos as $tratamento)
                <tr>
                    <td>{{ $tratamento->data_inicio }}</td>
                    <td>{{ $tratamento->paciente->nome }}</td>
                    <td>
                        <a href="/tratamento/{{$tratamento->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/tratamento/{{$tratamento->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>