<x-app-layout>

<h2>Cadastro de Terapia</h2>
    <form method="POST" action="/terapia">
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
            <label for="notas">Notas</label>
            <textarea id="notas" name="notas" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="tecnica">Técnica</label>
            <textarea id="tecnica" name="tecnica" class="form-control" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>