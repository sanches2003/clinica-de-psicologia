<x-app-layout>
    <h2>Gerenciar Evolução</h2>
    <a href="/problema/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evolucaos as $evolucao)
                <tr>
                    <td>{{ $evolucao->paciente->nome }}</td>
                    <td>{{ $evolucao->data_identificacao }}</td>
                    <td>
                        <a href="/evolucao/{{$prescricao->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/evolucao/{{$prescricao->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>