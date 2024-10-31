<x-app-layout>

<h2>Edição de Diagnóstico</h2>
    <form method="POST" action="/diagnostico/{{$diagnostico->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                value="{{$diagnostico->data}}" name="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $diagnostico->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-diagnostico">
            <label for="diagnostico">Diagnóstico</label>
            <textarea id="diagnostico" name="diagnostico" class="form-control" rows="4" required>
                {{$diagnostico->diagnostico}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" required>
                {{$diagnostico->descricao}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>