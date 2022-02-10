@extends('layout')

@section('content')

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td class="fontmax">Поле</td>
                            <td class="fontmax">Значение</td>
                        </tr>
                        @foreach($record as $elem)
                            <tr>
                                <td class="fontmax">Название</td>
                                <td class="fontmax">{{$elem->name}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Описание</td>
                                <td class="fontmax">{{$elem->description}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Изображение</td>
                                <td class="fontmax">{{$elem->image}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Дата начала</td>
                                <td class="fontmax">{{$elem->start_date}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Дата окончания</td>
                                <td class="fontmax">{{$elem->finish_date}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Код</td>
                                <td class="fontmax" >{{$elem->code}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Статус</td>
                                <td class="fontmax">{{$elem->status}}</td>
                            </tr>
                            <tr>
                                <td class="fontmax">Задачи</td>
                                <td class="fontmax">{{$elem->tasks}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>

@endsection
