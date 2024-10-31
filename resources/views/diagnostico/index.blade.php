<x-app-layout>
    <h2>Gerenciar Diagnósticos</h2>
    <a href="/diagnostico/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diagnosticos as $diagnostico)
                <tr>
                    <td>{{ $diagnostico->paciente->nome }}</td>
                    <td>{{ $diagnostico->data }}</td>
                    <td>
                        <a href="/diagnostico/{{$diagnostico->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/diagnostico/{{$diagnostico->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>