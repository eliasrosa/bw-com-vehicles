@extends('BW::template.index')

@section('title', '<span class="fa fa-car"></span> Veículos')

@section('title_buttons')
    <a href="{{ route('bw.automoveis.veiculos.create') }}"><span class="fa fa-plus"></span> Adicionar veículos</a>
@endsection
