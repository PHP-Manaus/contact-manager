@extends('layouts.app') {{-- Chamada do arquivo de layouts --}}

@section('content') {{-- Início do conteúdo --}}
<div>
    <h1>Cadastro de Contato</h1>

    <form class="max-w-md mx-auto" action="{{ route('web.contacts.store') }}" method="post">
        @csrf
        @include('contacts.partials.form', ['isEdit' => false])
    </form>
</div>
@endsection