<x-app-layout>
    <h2>Gerenciar Encaminhamento</h2>
    <a href="/encaminhamento/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encaminhamentos as $encaminhamento)
                <tr>
                    <td>{{ $encaminhamento->paciente->nome }}</td>
                    <td>{{ $encaminhamento->data }}</td>
                    <td>
                        <a href="/encaminhamento/{{$encaminhamento->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/encaminhamento/{{$encaminhamento->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>