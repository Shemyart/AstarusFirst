<?php

namespace App\Http\Controllers;


use App\Models\ProjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        return view('projects', ['projects'=>$projects->all()]);
    }

    public function detail($slug)
    {

        Log::debug('Детальный просмотр: '.$slug);
        $record = DB::table('projects_models')
            ->where('projects_models.slug', '=', $slug)
            ->get();

        if (setting('admin.project_equip') == 1) {
            $equiprec = DB::table('equipment_models')
                ->where('project_id', '=', $record[0]->id)
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
