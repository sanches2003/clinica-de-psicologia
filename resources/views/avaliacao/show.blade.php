<x-app-layout>

<h2>Registro de Avaliação</h2>
    <div class="form-group">
            <label for="data">Data:</label>
            <p>{{$avaliacao->data_avaliacao}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$avaliacao->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="observacoes">Observações</label>
            <p>{{$avaliacao->observacoes}}</p>
        </div>
    </div>

</x-app-layout>