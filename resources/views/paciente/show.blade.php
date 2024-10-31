<x-app-layout>

<h2>Registro de Diagnostico</h2>
    <div class="form-group">
            <label for="nome">Nome do Paciente:</label>
            <p>{{$paciente->nome}}</p>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <p>{{$paciente->data_nascimento}}</p>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <p>{{$paciente->telefone}}</p>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <p>{{$paciente->email}}</p>
        </div>
    </div>

</x-app-layout>