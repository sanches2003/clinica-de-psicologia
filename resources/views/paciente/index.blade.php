<x-app-layout>
    <h2>Gerenciar Pacientes</h2>
    <a href="/paciente/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nome }}</td>
                    <td>
                        <a href="/paciente/{{$paciente->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/paciente/{{$paciente->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>