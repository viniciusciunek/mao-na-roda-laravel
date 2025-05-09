@extends('layouts.public')

@section('content')
    <div class="text-center">
        <h1 class="text-5xl font-bold">Mão na Roda</h1>
        <p class="text-md">O assistente que você precisa para sua oficina!</p>
    </div>

    <div>
        <img src="{{ asset('images/Carpenter.svg') }}" alt="Imagem de boas vindas">
    </div>

    <div>
        <p>Gerencie sua oficina, facilite seus fluxos diários. Faça da sua oficina, o melhor lugar para o seu cliente.
        </p>
    </div>

    <a href=""
        class="bg-primary-500 hover:bg-primary-600 shadow-primary-600/30 cursor-pointer rounded-2xl px-20 py-4 font-bold text-white shadow-xl">Entrar</a>
@endsection
