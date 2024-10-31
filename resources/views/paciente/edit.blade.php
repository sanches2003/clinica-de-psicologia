<x-app-layout>

<h2>Edição do Paciente</h2>
    <form method="POST" action="/paciente/{{$paciente->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome Paciente</label>
            <textarea id="nome" name="nome" class="form-control" required>
                {{$paciente->nome}}
            </textarea>
        </div>
        <div class="form-group">
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" id="data_nascimento" name="data_nascimento" 
       class="form-control" value="{{ $paciente->data_nascimento }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <textarea id="telefone" name="telefone" class="form-control" required>
                {{$paciente->telefone}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <textarea id="email" name="email" class="form-control" required>
                {{$paciente->email}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-app-layout>