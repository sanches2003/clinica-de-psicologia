<x-app-layout>

<h2>Registro de Encaminhamento</h2>
    <div class="form-group">
            <label for="data">Data</label>
            <p>{{$encaminhamento->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$encaminhamento->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="nome_profissional">Nome do Profissional</label>
            <p>{{$encaminhamento->nome_profissional}}</p>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <p>{{$encaminhamento->descricao}}</p>
        </div>
    </div>

</x-app-layout>