@extends('layouts.app') {{-- Chamada do arquivo de layouts --}}

@section('content') {{-- Início do conteúdo --}}
<div class="min-h-full">
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
      <div>
        <h1 class="text-3xl font-bold tracking-tight text-white">Agenda de Contatos</h1>
      </div>
      <div>
        <a href="{{ route('web.contacts.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Novo Contato</a>
      </div>
    </div>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                Nome
              </th>
              <th scope="col" class="px-6 py-3">
                E-mail
              </th>
              <th scope="col" class="px-6 py-3">
                Telefone / Celular
              </th>
              <th scope="col" class="px-6 py-3">
                Cidade
              </th>
              <th scope="col" class="px-6 py-3">
                Estado
              </th>
              <th scope="col" class="px-6 py-3 text-center">
                Ações
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($contacts as $contact)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $contact->name }}
              </th>
              <td class="px-6 py-4">
                {{ $contact->email }}
              </td>
              <td class="px-6 py-4">
                {{ $contact->phone }}
              </td>
              <td class="px-6 py-4">
                {{ $contact->city}}
              </td>
              <td class="px-6 py-4">
                {{ $contact->state }}
              </td>
              <td class="px-4 py-4 flex justify-between">
                <a href="{{ route('web.contacts.show', $contact->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Visualizar</a>
                <a href="{{ route('web.contacts.edit', $contact->id) }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">Alterar</a>
                <form action="{{ route('web.contacts.destroy', $contact->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Excluir</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>

@endsection