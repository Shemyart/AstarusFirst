<?php

namespace App\Observers;

use App\Models\ProjectsModel;
use phpDocumentor\Reflection\Types\Void_;

class ProjectsObserver
{
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
        if ($projectsModel->status == 'Закрыт' and $projectsModel->isDirty('status')){
            $projectsModel->finish_date = date('Y:m:d');
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
