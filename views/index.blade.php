@extends('BW::template.index')

@section('header.icon', 'fa fa-car')
@section('header.title', 'Gerenciar veículos')

@section('header.menu')
    <li><a href="{{ route('bw.veiculos.create') }}">Adicionar veículo</a></li>
@endsection

@section('content.index')
@endsection
