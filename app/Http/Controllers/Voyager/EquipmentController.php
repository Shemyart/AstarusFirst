<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Post;
use function request;

class EquipmentController extends VoyagerBaseController
{
    public function activity(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        // Получить запись по ID и переключить статус

        $post = Post::where('id', request("id"))->first();
        $post->status = $post->status=="1"?"Активно":"Неактивно";
        $post->save();
        return redirect(route('voyager.equipment-models.index'));
    }
}
