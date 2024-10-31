<x-app-layout>
    <h2>Gerenciar Prescrição</h2>
    <a href="/prescricao/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prescricaos as $prescricao)
                <tr>
                    <td>{{ $prescricao->paciente->nome }}</td>
                    <td>{{ $prescricao->data }}</td>
                    <td>
                        <a href="/prescricao/{{$prescricao->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/prescricao/{{$prescricao->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>