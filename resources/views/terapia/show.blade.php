<x-app-layout>

<h2>Registro de Terapia</h2>
    <div class="form-group">
            <label for="data">Data</label>
            <p>{{$terapia->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$terapia->paciente->nome}}</p>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="notas">Notas</label>
            <p>{{$terapia->notas}}</p>
        </div>
        <div class="form-group">
            <label for="tecnica">Técnica</label>
            <p>{{$terapia->tecnica}}</p>
        </div>
    </div>

</x-app-layout>