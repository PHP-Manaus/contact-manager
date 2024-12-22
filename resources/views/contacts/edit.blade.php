@extends('layouts.app') {{-- Chamada do arquivo de layouts --}}

@section('content') {{-- Início do conteúdo --}}
<div>
    <h1>Alteração de Contato</h1>
    <form class="max-w-md mx-auto" action="{{ route('web.contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('contacts.partials.form', ['isEdit' => true])
    </form>
</div>
@endsection