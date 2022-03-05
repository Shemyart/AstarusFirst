<?php

namespace App\Http\Controllers;


use App\Models\EquipmentModel;
use App\Models\ProjectsModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $projects = new ProjectsModel();
        //Выдача результатов зависит от роли пользователя, а также, если пользователь не залогинен, выдается вся доступная информация
        if(Auth::user()){
            switch(Auth::user()->role_id){
                case 3:
                case 1:
                    return view('projects', ['projects'=>$projects->all()]);
                case 2:
                    $validprojects = ProjectsModel::where('user_id', Auth::user()->id)
                        ->get();

                    return view('projects', ['projects'=>$validprojects]);
            }
        }else{
            return view('mainpage');
        }

    }

    public function detail($slug)
    {
        //Детальный просмотр
        Log::debug('Детальный просмотр: '.$slug);

            $record = ProjectsModel::where('slug', $slug )
                ->get();

        if (setting('projects.project_equip') == 1) {
            $equiprec = EquipmentModel::where('project_id', $record[0]->id )->where('activity', 1)
                ->get();


            return view('detail', [
                'record' => $record,
                'equiprec' => $equiprec,
            ]);
        }else{
            return view('detail', [
                'record' => $record,
                'equiprec'=>null,
            ]);
        }

    }

    public function tester(){
        //Страничка тестировщика, отображает все проекты
        if (Auth::user()){
            if (Auth::user()->role_id == 3)
            {
                $projects = new ProjectsModel();
                return view('projects', ['projects'=>$projects->all()]);
            }else{
                return view('dashboard');
            }
        }else{
            return view('dashboard');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($slug, $id)
    {
        //Динамическое удаление на странице детального просмотра
        EquipmentModel::find($id)->delete();
        return response()->json(['success'=>'Запись удалена']);
    }
}
