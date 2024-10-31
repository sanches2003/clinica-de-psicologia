<x-app-layout>

<h2>Registro de Agendamento</h2>
    <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$agendamento->paciente->nome}}</p>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <p>{{$agendamento->data}}</p>
        </div>
        <div class="form-group">
            <label for="hora">Diagnóstico</label>
            <p>{{$agendamento->hora}}</p>
        </div>
    </div>

</x-app-layout>