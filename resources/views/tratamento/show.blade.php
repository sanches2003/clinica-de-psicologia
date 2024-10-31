<x-app-layout>

<h2>Registro de Tratamentos</h2>
    <div class="form-group">
            <label for="data_inicio">Data Início:</label>
            <p>{{$tratamento->data_inicio}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$tratamento->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="objetivos">Objetivos</label>
            <p>{{$tratamento->objetivos}}</p>
        </div>
        <div class="form-group">
            <label for="progresso">Progresso</label>
            <p>{{$tratamento->progresso}}</p>
        </div>
    </div>

</x-app-layout>