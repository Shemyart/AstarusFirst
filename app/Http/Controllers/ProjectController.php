<?php

namespace App\Http\Controllers;

use App\Models\FirstModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function detail($id)
    {
        $record = DB::table('projects_models')
            ->where('projects_models.id', '=', $id)
            /*->Leftjoin('equipment_models', 'projects_models.id', '=','equipment_models.project_id')*/
            ->get();
        $equiprec = DB::table('equipment_models')
            ->where('project_id', '=', $id)
            /*->Leftjoin('equipment_models', 'projects_models.id', '=','equipment_models.project_id')*/
            ->get();

        return view('detail', [
            'record'=>$record,
            'equiprec'=>$equiprec,
            ]);
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
