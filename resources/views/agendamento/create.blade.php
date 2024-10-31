<x-app-layout>

<h2>Cadastro de Agendamento</h2>
    <form method="POST" action="/agendamento">
        @csrf
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{ $p->id }}">
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                name="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" id="hora" 
                name="hora" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>