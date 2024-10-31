<x-app-layout>
    <h2>Gerenciar Terapia</h2>
    <a href="/terapia/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($terapias as $terapia)
                <tr>
                    <td>{{ $terapia->paciente->nome }}</td>
                    <td>{{ $terapia->data }}</td>
                    <td>
                        <a href="/terapia/{{$terapia->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/terapia/{{$terapia->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>