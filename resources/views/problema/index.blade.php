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
            @foreach($problemas as $problema)
                <tr>
                    <td>{{ $problema->paciente->nome }}</td>
                    <td>{{ $problema->data_identificacao }}</td>
                    <td>
                        <a href="/problema/{{$problema->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/problema/{{$problema->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>