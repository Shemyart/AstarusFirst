<?php

namespace App\Http\Controllers;

use App\Models\EquipmentModel;
use App\Models\FirstModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class FirstController extends Controller
{
    public function equip()
    {
        $equipments = new EquipmentModel();

        return view('equipments', ['equipments'=>$equipments->all()]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //Полное удаление из БД
        $result = EquipmentModel::find($id)->forceDelete();

        Log::debug('Удаление оборудования с id:'.$id);

        if($result){
            return redirect()
                ->route('equipment')
                ->with(['success'=>"Запись удалена"]);
        }else{
            return back()->withErrors(['msg'=>'Ошибка удаления']);
        }
    }

}
