<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="/avaliacaopsicologica" class="btn btn-primary">Avaliação Psicologica</a>
        <a href="/paciente" class="btn btn-primary">Paciente</a>
        <a href="/agendamento" class="btn btn-primary">Agendamento</a>
        <a href="/diagnostico" class="btn btn-primary">Diagnóstico</a>
        <a href="/encaminhamento" class="btn btn-primary">Encaminhamento</a>
        <a href="/prescricao" class="btn btn-primary">Prescrição</a>
        <a href="/terapia" class="btn btn-primary">Terapia</a>
        <a href="/problema" class="btn btn-primary">Problema</a>
        <a href="/tratamento" class="btn btn-primary">Tratamento</a>
        <a href="/user" class="btn btn-primary">Usuários</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
