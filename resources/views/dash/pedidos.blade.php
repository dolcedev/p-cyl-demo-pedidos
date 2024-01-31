@extends('dash.layout.dash', [
    'title' => 'Pedidos | CYL',
])



@section('css')

@endsection

@section('js')

@endsection

@section('content')


<div class="card">

    <div class="card-body">

        <div class="table-responsive">
            <table class="table">

                <thead>
                    <th>D</th>
                    <th>L</th>
                    <th>Pedidos NAV</th>
                    <th>IMPRESO</th>
                    <th>Fecha Servicio</th>
                    <th>Pedido Taller</th>
                    <th>Version</th>
                    <th>Ultima Version SI/NO</th>
                    <th>Nombre</th>
                    <th>Montado</th>
                    <th>Enviado</th>
                    <th>Anulado</th>
                    <th>Motivo Anulado</th>
                    <th>Creado Por</th>
                    <th>Fecha Pedido</th>
                    <th>Fecha Creado</th>
                    <th>Transporte</th>
                    <th>Transporte Default</th>
                </thead>

                <tbody>

                    @foreach ($pedidos as $pedido)
                    <tr>
                        @foreach ($pedido as $cell)
                            <td>{{$cell}}</td>
                        @endforeach
                    </tr>

                    @endforeach


                </tbody>

            </table>
        </div>

    </div>


</div>


@endsection
