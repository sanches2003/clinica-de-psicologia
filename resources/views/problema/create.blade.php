<x-app-layout>

<h2>Cadastro de Condição</h2>
    <form method="POST" action="/problema">
        @csrf
        <div class="form-group">
            <label for="data_identificacao">Data</label>
            <input type="date" id="data_identificacao" 
                name="data_identificacao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{ $p->id }}">
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="evolucao">Evolução</label>
            <textarea id="evolucao" name="evolucao" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>