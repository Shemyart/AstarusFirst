@extends('layout')
@section('title')Оборудование@endsection
@section('content')
    @include('result_message')
    <div class="min-h-screen bg-gray-100">
        <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="tablehead">№</th>
                            <th scope="col" class="tablehead">Наименование</th>
                            <th scope="col" class="tablehead">Количество</th>
                            <th scope="col" class="tablehead">Изображение</th>
                            <th scope="col" class="tablehead">Активность</th>
                            <th scope="col" class="tablehead">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sch=1; @endphp
                            @foreach($equipments as $elem)
                                @php
                                    $splitArrayImg = array();
                                    $splitArrayFile = array();
                                    $active = 1;
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
                                <tr>
                                    <td class="">{{$sch++}}</td>
                                    <td>{{$elem->name}}</td>
                                    <td>{{$elem->volume}}</td>
                                    <td>
                                        <p>
                                        @foreach ($splitArrayImg as $img)
                                            <img class="img" style="display: inline;" width="50px" height="50px" src="/storage/{{$img}}" alt="Не найдено">
                                        @endforeach
                                        </p>
                                    </td>
                                    <td>
                                    @if($elem->activity == 0)
                                        <p class="d-inline-block mb-2 text">Неактивно</p>
                                    @else
                                        <p class="d-inline-block mb-2 text">Активно</p>
                                    @endif
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('delete.destroy', $elem->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-primary" value="{{$elem->id}}"><i class="fa-solid fa-trash-can fa-fade" style="--fa-animation-duration: 3s; --fa-fade-opacity: 0.6;"></i> Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- ./table-responsive-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div>
    </div>

@endsection
