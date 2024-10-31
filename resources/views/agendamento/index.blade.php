<x-app-layout>
    <h2>Gerenciar Agendamento</h2>
    <a href="/agendamento/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->paciente->nome }}</td>
                    <td>{{ $agendamento->data }}</td>
                    <td>
                        <a href="/agendamento/{{$agendamento->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/agendamento/{{$agendamento->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>