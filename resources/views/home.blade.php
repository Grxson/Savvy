@extends('layouts.app')

@section('titulo')
    Pagina pricipal
@endsection

@section('contenido')

    <x-listar-post :posts="$posts" />
@endsection
