<?php

namespace App\Http\Controllers\Voyager;

use App\Models\EquipmentModel;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

use function request;

class EquipmentController extends VoyagerBaseController
{
    public function activity(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        // Получить запись по ID и переключить статус

        $equip = EquipmentModel::where('id', request("id"))->first();

        $equip->activity = $equip->activity=='0'?'1':'0';

        $equip->save();
        return redirect(route('voyager.equipment-models.index'));
    }
}
