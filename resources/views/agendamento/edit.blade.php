<x-app-layout>

<h2>Edição de Agendamento</h2>
    <form method="POST" action="/agendamento/{{$agendamento->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $agendamento->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                value="{{$agendamento->data}}" name="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" id="hora" 
                value="{{$agendamento->hora}}" name="hora" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>