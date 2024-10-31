<x-app-layout>

<h2>Cadastro de Paciente</h2>
    <form method="POST" action="/paciente">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Paciente</label>
            <textarea id="nome" name="nome" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" 
                name="data_nascimento" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <textarea id="telefone" name="telefone" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <textarea id="email" name="email" class="form-control" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-app-layout>