<x-app-layout>

<h2>Registro de Prescrição</h2>
    <div class="form-group">
            <label for="data">Data</label>
            <p>{{$prescricao->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$prescricao->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <p>{{$prescricao->descricao}}</p>
        </div>
    </div>

</x-app-layout>