<x-app-layout>

<h2>Edição de Terapia</h2>
    <form method="POST" action="/terapia/{{$terapia->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                value="{{$terapia->data}}" name="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $terapia->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="notas">Notas</label>
            <textarea id="notas" name="notas" class="form-control" rows="4" required>
                {{$terapia->notas}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="tecnica">Técnica</label>
            <textarea id="tecnica" name="tecnica" class="form-control" rows="4" required>
                {{$terapia->tecnica}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>