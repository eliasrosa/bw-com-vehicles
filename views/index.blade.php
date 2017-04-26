@extends('BW::template.index')

@section('header.icon', 'fa fa-car')
@section('header.title', 'Gerenciar veículos')

@section('header.menu')
    <li><a href="{{ route('bw.vehicles.create') }}"><span class="fa fa-plus"></span> Adicionar veículo</a></li>
@endsection

@section('content.index')

    <div class="table-responsive">
        <table class="datatable-simple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Preço</th>
                    <th>Status</th>
                    <th>Opçoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $i)
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->license_plate }}</td>
                    <td>{{ $i->model }}</td>
                    <td>{{ $i->year }} / {{ $i->year_model }}</td>
                    <td>
                        @if($i->price > 0)
                            R$ {{ number_format($i->price, 2, ',', '.') }}
                        @else
                            Sob Consulta
                        @endif
                    </td>
                    <td>
                        <span class="label label-default">{{ $i->status ? $i->status->name : '' }}</span>
                    </td>
                    <td>
                        <a href="{{ route('bw.vehicles.edit', $i->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-edit"></span> Editar</a>

                        <form action="{{ route('bw.vehicles.destroy', $i->id) }}" style="display: inline-block" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-xs btn-remove-record">
                                <span class="fa fa-trash-o"></span> Remover
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
