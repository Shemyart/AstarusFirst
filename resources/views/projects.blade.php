@extends('layout')

@section('content')

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="tablehead">№</th>
                            <th scope="col" class="tablehead">Название</th>
                            <th scope="col" class="tablehead">Описание</th>
                            <th scope="col" class="tablehead">Картинка</th>
                            <th scope="col" class="tablehead">Дата начала</th>
                            <th scope="col" class="tablehead">Дата окончания</th>
                            <th scope="col" class="tablehead">Код</th>
                            <th scope="col" class="tablehead">Статус</th>
                            <th scope="col" class="tablehead">Задачи</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sch=1; @endphp
                        @foreach($projects as $elem)
                            @php
                                $splitarrayimg = array();
                                $splitimg = explode(',', $elem->image);
                                    foreach ($splitimg as $splitelem){
                                        $newsplit = trim($splitelem, '"[]');
                                        array_push($splitarrayimg, $newsplit);
                                    }
                            @endphp
                            <tr>
                                <td>{{$sch++}}</td>
                                <td><a href="http://astarusfirst.loc/projects/{{$elem->slug}}">{{$elem->name}}</a></td>
                                <td>{{$elem->description}}</td>
                                <td><img class="img-fluid" src="http://astarusfirst.loc/storage/{{$splitarrayimg[0]}}" alt="Не найдено"></td>
                                <td>{{$elem->start_date}}</td>
                                <td>{{$elem->finish_date}}</td>
                                <td>{{$elem->code}}</td>
                                <td>{{$elem->status}}</td>
                                <td>{{$elem->tasks}}</td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>

@endsection
