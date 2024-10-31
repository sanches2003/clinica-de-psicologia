<x-app-layout>

<h2>Edição de Avaliação Psicológica</h2>
    <form method="POST" action="/avaliacaopsicologica/{{$avaliacao->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data_avaliacao" 
                value="{{$avaliacao->data_avaliacao}}" name="data_avaliacao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $avaliacao->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="observacoes">Observações</label>
            <textarea id="observacoes" name="observacoes" class="form-control" rows="4" required>
                {{$avaliacao->observacoes}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>