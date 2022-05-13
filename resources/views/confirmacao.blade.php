@extends('layouts')

@section('conteudo-principal')
    <div class="container">
        <h1>Obrigado por seu relato!</h1>
        <h2>Resumo:</h2>
        <p>You were abducted {{ $relato->when_it_happened }} and were gone for how_long.</p>
        <p>Discribe them: {{ $relato->allien_description }}</p>
        <p>Was Fang there? {{ $relato->fang_spotted }}</p>
        <p>Your email address is {{ $relato->email }}</p>
    </div>

    <div class="container mt-5">
        <a href="{{ route('relato.formulario') }}">Voltar</a>
    </div>
@endsection
