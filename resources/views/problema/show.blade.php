<x-app-layout>

<h2>Registro de Problema</h2>
    <div class="form-group">
            <label for="data_identificacao">Data da identificação</label>
            <p>{{$problema->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$problema->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="evolucao">Evolução</label>
            <p>{{$problema->evolucao}}</p>
        </div>
    </div>

</x-app-layout>