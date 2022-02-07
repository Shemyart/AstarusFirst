@extends('layout')

@section('content')
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col" style="font-size:20px;">Порядковый номер</th>
                            <th scope="col" style="font-size:20px;">Наименование</th>
                            <th scope="col" style="font-size:20px;">Количество</th>
                            <th scope="col" style="font-size:20px;">Активность</th>
                            <th scope="col" style="font-size:20px;">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($equipments as $elem)
                            <tr>
                                <td>number</td>
                                <td>{{$elem->name}}</td>
                                <td>{{$elem->volume}}</td>
                                <td>{{$elem->action}}</td>
                                <td>Deistvie</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>

@endsection
