@extends('admin.layouts.app')

@section('title', "Detalhes da dúvida " . $support->subject)

@section('header')
    <h1 class="text-lg text-black-500"> Dúvida {{ $support->subject }}</h1>
@endsection

@section('content')
    <ul>
        <li>Assunto: {{$support->subject}}</li>
        <li>Status: {{ $support->status }}</li>
        <li>Descrição: {{$support->body}}</li>
    </ul>

    <form action="{{route('supports.destroy', $support->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition-colors duration-300">
            Deletar
        </button>
@endsection
