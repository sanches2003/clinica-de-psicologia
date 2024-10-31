<x-app-layout>

<h2>Cadastro de Tratamento</h2>
    <form method="POST" action="/tratamento">
        @csrf
        <div class="form-group">
            <label for="data_inicio">Data Início</label>
            <input type="date" id="data_inicio" 
                name="data_avaliacao" class="form-control" required>
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
            <label for="objetivos">Objetivos</label>
            <textarea id="objetivos" name="objetivos" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="progresso">Progresso</label>
            <textarea id="progresso" name="progresso" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>