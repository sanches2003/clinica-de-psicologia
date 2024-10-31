<x-app-layout>

<h2>Edição de Encaminhamento</h2>
    <form method="POST" action="/encaminhamento/{{$encaminhamento->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" id="data" 
                value="{{$encaminhamento->data}}" name="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{$p->id}}" {{$p-> id == $encaminhamento->paciente_id ? 'selected' : ''}}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="nome_profissional">Nome do Profissional</label>
            <textarea id="nome_profissional" name="nome_profissional" class="form-control" rows="4" required>
                {{$encaminhamento->nome_profissional}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" required>
                {{$encaminhamento->descricao}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>