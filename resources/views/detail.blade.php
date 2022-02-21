@extends('layout')
@section('title')Детальный просмотр@endsection
@section('content')

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Поле</td>
                                <td>Значение</td>
                            </tr>
                        </thead>
                        @foreach($record as $elem)

                            @php
                                $slug = $elem->slug;
                                $splitArrayImg = array();
                                $active = 0;
                                $splitImg = explode(',', $elem->image);
                                    foreach ($splitImg as $splitelem){
                                        $newSplit = trim($splitelem, '"[]');
                                        array_push($splitArrayImg, $newSplit);
                                    }
                            @endphp

                            <tr>
                                <td>Название</td>
                                <td>{{$elem->name}}</td>

                            </tr>
                            <tr>
                                <td>Описание</td>

                                <td>{{$elem->description}}</td>
                            </tr>
                            @foreach ($splitArrayImg as $img)
                            <tr>
                                <td>Изображение</td>
                                <td>
                                    <img class="img-fluid" width="100" height="100" src="/storage/{{$img}}" alt="Не найдено">
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>Дата начала</td>
                                <td>{{$elem->start_date}}</td>
                            </tr>
                            <tr>
                                <td>Дата окончания</td>
                                <td>{{$elem->finish_date}}</td>
                            </tr>
                            <tr>
                                <td>Код</td>
                                <td>{{$elem->code}}</td>
                            </tr>
                            <tr>
                                <td>Статус</td>
                                <td>{{$elem->status}}</td>
                            </tr>
                            <tr>
                                <td>Задачи</td>
                                <td>{{$elem->tasks}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <hr>
                    <br>
                    @if($equiprec)
                        <h1>
                            Оборудование
                        </h1>
                        <br>

                        @foreach($equiprec as $elem)
                            @php
                                $splitArrayImg = array();
                                $splitArrayFile = array();
                                $active = 0;
                                $splitImg = explode(',', $elem->image);
                                $splitFile = explode(',', $elem->file);
                                    foreach ($splitImg as $splitelem){
                                        $newSplit = trim($splitelem, '"[]');
                                        array_push($splitArrayImg, $newSplit);
                                    }
                                    foreach ($splitFile as $splitelem){
                                        $newSplit = trim($splitelem, '"[]');
                                        array_push($splitArrayFile, $newSplit);

                                    }
                                    $linkFile = substr($splitArrayFile[0],18);
                            @endphp
                        <div class="col-md-12" id="equipid{{$elem->id}}">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <table >
                                        <tr>
                                            <td>
                                                Наименование
                                            </td>
                                            <td>
                                                <strong class="d-inline-block mb-2">{{$elem->name}}</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Количество
                                            </td>
                                            <td >
                                                <strong class="d-inline-block mb-2 text">{{$elem->volume}} шт.</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Активность
                                            </td>
                                            <td >
                                                @if($elem->activity == 0)
                                                    <strong class="d-inline-block mb-2 text">Неактивен</strong>
                                                @else
                                                    <strong class="d-inline-block mb-2 text">Активен</strong>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Файл
                                            </td>
                                            <td >
                                                <a href="/storage/{{$linkFile}}" class="nav-link">Ссылка на файл</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="btn btn-danger" href="javascript:void(0)" data-token="{{ csrf_token() }}" onclick="destroy({{$elem->id}}, '{{$slug}}')">Удалить</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-4  d-lg-block">
                                    <div id="carousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">


                                    @foreach ($splitArrayImg as $img)

                                        @if ($active == 0)
                                            <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                        @endif
                                                <img class="img-fluid" width="250" height="250" src="/storage/{{$img}}" alt="Не найдено">
                                            </div>
                                        @php  $active = 1;@endphp
                                    @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        @endforeach
                   @endif
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>
        <script>
            function destroy(id, slug)
            {
                if(confirm('Вы действительно хотите удалить?'))
                {
                    $.ajax({
                       url: "/projects/"+slug+'/'+id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{
                          id:id,
                          slug:slug,
                        },
                        success:function (response)
                        {
                            $("#equipid"+id).remove();
                        }
                    });
                }
            }
        </script>
@endsection
