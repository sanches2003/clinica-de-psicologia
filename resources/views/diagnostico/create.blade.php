<x-app-layout>

<h2>Cadastro de Diagnóstico</h2>
    <form method="POST" action="/diagnostico">
        @csrf
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                name="data" class="form-control" required>
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
            <label for="diagnostico">Diagnóstico</label>
            <textarea id="diagnostico" name="diagnostico" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>