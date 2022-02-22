<?php

namespace App\Observers;

use App\Models\ProjectsModel;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Void_;

class ProjectsObserver
{
    /**
     * Handle the ProjectsModel "created" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function creating(ProjectsModel $projectsModel)
    {
        //Создание слага при создании новой записи
        $this->setSlug($projectsModel);
    }
    /**
     * Handle the ProjectsModel "created" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function created(ProjectsModel $projectsModel)
    {
        //
    }

    /**
     * Handle the ProjectsModel "updated" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function updating(ProjectsModel $projectsModel)
    {
        //Создание слага при обновлении записи и простановка даты в зависимости от статуса
        $this->setSlug($projectsModel);
        if ($projectsModel->status == 'Закрыт' and $projectsModel->isDirty('status')){
            $projectsModel->finish_date = date('Y:m:d');
        }else{
            $projectsModel->finish_date = date('Y:m:d', strtotime($projectsModel->finish_date) + 86400);
        }
    }

    /**
     * Handle the ProjectsModel "updated" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function updated(ProjectsModel $projectsModel)
    {
   //
    }

    protected function setSlug(ProjectsModel $projectsModel)
    {
        if(empty($projectsModel->slug)){
            $projectsModel->slug = Str::slug($projectsModel->name);
        }
    }


    /**
     * Handle the ProjectsModel "deleted" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function deleted(ProjectsModel $projectsModel)
    {
        //
    }

    /**
     * Handle the ProjectsModel "restored" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function restored(ProjectsModel $projectsModel)
    {

    }

    /**
     * Handle the ProjectsModel "force deleted" event.
     *
     * @param  \App\Models\ProjectsModel  $projectsModel
     * @return void
     */
    public function forceDeleted(ProjectsModel $projectsModel)
    {
        //
    }
}
