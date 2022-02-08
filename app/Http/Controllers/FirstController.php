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

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //dd(__METHOD__, $id, request()->all());
        //Полное удаление из БД
        $result = FirstModel::find($id)->forceDelete();

        if($result){
            return redirect()
                ->route('homepage')
                ->with(['success'=>"Запись удалена"]);
        }else{
            return back()->withErrors(['msg'=>'Ошибка удаления']);
        }
    }
}
