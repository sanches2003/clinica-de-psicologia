<x-app-layout>

<h2>Edição do Tratamento</h2>
    <form method="POST" action="/tratamento/{{$tratamento->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data_inicio">Data Início</label>
            <input type="date" id="data_inicio" 
                value="{{$tratamento->data_inicio}}" name="data_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $tratamento->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="objetivos">Objetivos</label>
            <textarea id="objetivos" name="objetivos" class="form-control" rows="4" required>
                {{$tratamento->objetivos}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="progresso">Progresso</label>
            <textarea id="progresso" name="progresso" class="form-control" rows="4" required>
                {{$tratamento->progresso}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>