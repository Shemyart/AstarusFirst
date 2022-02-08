@extends('layout')

@section('content')

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="tablehead">Порядковый номер</th>
                            <th scope="col" class="tablehead">Наименование</th>
                            <th scope="col" class="tablehead">Количество</th>
                            <th scope="col" class="tablehead">Активность</th>
                            <th scope="col" class="tablehead">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sch=1; @endphp
                            @foreach($equipments as $elem)
                                <tr>
                                    <td>{{$sch++}}</td>
                                    <td>{{$elem->name}}</td>
                                    <td>{{$elem->volume}}</td>
                                    <td>{{$elem->action}}</td>
                                    <td>
                                        <form method="POST" action="{{route('delete.destroy', $elem->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-primary" value="{{$elem->id}}">Удалить</button>
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

@endsection
