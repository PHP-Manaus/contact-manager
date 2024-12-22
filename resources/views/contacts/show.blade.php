@extends('layouts.app') {{-- Chamada do arquivo de layouts --}}

@section('content') {{-- Início do conteúdo --}}
<div>
  <div class="px-4 sm:px-0 flex justify-between">
    <h3 class="text-base/7 font-semibold text-white">Informações do contato</h3>
    <a href="{{ route('web.contacts.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voltar</a>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-white">Nome</dt>
        <dd class="mt-1 text-sm/6 text-white sm:col-span-2 sm:mt-0">{{ $contact->name}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-white">E-mail</dt>
        <dd class="mt-1 text-sm/6 text-white sm:col-span-2 sm:mt-0">{{ $contact->email }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-white">Telefone / Celular</dt>
        <dd class="mt-1 text-sm/6 text-white sm:col-span-2 sm:mt-0">{{ $contact->phone}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-white">Cidade</dt>
        <dd class="mt-1 text-sm/6 text-white sm:col-span-2 sm:mt-0">{{ $contact->city}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-white">Estado</dt>
        <dd class="mt-1 text-sm/6 text-white sm:col-span-2 sm:mt-0">{{ $contact->state }}</dd>
      </div>
    </dl>
  </div>
</div>
@endsection