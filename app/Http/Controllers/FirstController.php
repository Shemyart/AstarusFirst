<?php

namespace App\Http\Controllers;

use App\Models\FirstModel;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function home()
    {
        $equipments = new FirstModel();

        return view('equipments', ['equipments'=>$equipments->all()]);
    }
    public function destroy()
    {
        //
    }
}
