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
                                <td class="fontmax"><img class="img-fluid" src="http://astarusfirst.loc/storage/{{$elem->image}}"></td>
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
                    <hr>
                    @php $count=0;  @endphp
                    @foreach($equiprec as $elem)
                        @php
                            $splitarrayimg = array();
                            $splitarrayfile = array();
                            $active = 0;
                            $splitimg = explode(',', $elem->image);
                            $splitfile = explode(',', $elem->file);
                                foreach ($splitimg as $splitelem){
                                    $newsplit = trim($splitelem, '"[]');
                                    array_push($splitarrayimg, $newsplit);
                                }
                                foreach ($splitfile as $splitelem){
                                    $newsplit = trim($splitelem, '"[]');
                                    array_push($splitarrayfile, $newsplit);

                                }
                                $linkfile = substr($splitarrayfile[0],18);

                        @endphp
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <table>
                                    <tr>
                                        <td>
                                            Наименование
                                        </td>
                                        <td>
                                            <strong class="d-inline-block mb-2">{{$elem->name}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Количество
                                        </td>
                                        <td>
                                            <strong class="d-inline-block mb-2 text-success">{{$elem->volume}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Активность
                                        </td>
                                        <td>
                                            <strong class="d-inline-block mb-2 text-success">{{$elem->activity}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Файл
                                        </td>
                                        <td>
                                            <a href="http://astarusfirst.loc/storage/{{$linkfile}}" class="nav-link">Ссылка на файл</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-10  d-lg-block">
                                <div id="carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">


                                @foreach ($splitarrayimg as $img)

                                    @if ($active == 0)
                                        <div class="carousel-item active">
                                    @else
                                        <div class="carousel-item">
                                    @endif
                                            <img class="img-fluid" src="http://astarusfirst.loc/storage/{{$img}}" alt="Не найдено">
                                        </div>
                                    @php  $active = 1; @endphp
                                @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>

@endsection
