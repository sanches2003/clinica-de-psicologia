<x-app-layout>

<h2>Registro de Diagnóstico</h2>
    <div class="form-group">
            <label for="data">Data</label>
            <p>{{$diagnostico->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$diagnostico->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="diagnostico">Diagnóstico</label>
            <p>{{$diagnostico->diagnostico}}</p>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <p>{{$diagnostico->descricao}}</p>
        </div>
    </div>

</x-app-layout>