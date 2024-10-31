<x-app-layout>
    <h2>Gerenciar Avaliações Psicológicas</h2>
    <a href="/avaliacaopsicologica/create" class="btn btn-primary">Novo Registro</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Paciente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avaliacoes as $avaliacao)
                <tr>
                    <td>{{ $avaliacao->paciente->nome }}</td>
                    <td>{{ $avaliacao->data_avaliacao }}</td>
                    <td>
                        <a href="/avaliacaopsicologica/{{$avaliacao->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/avaliacaopsicologica/{{$avaliacao->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
            @endforeach
    </table>
</x-app-layout>