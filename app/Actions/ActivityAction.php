<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ActivityAction extends AbstractAction
{

    public function getTitle()
    {
        return $this->data->{'activity'}=="1"?'Активен':'Неактивен';
    }

    public function getIcon()
    {
        return $this->data->{'activity'}=="1"?'voyager-external':'voyager-x';
    }

    public function shouldActionDisplayOnDataType()
    {
        // Показывать или скрыть кнопку действия. Отображается только для модели Equipment
        return $this->dataType->slug == 'equipment-models';
    }
    public function getAttributes()
    {
        // Класс кнопки действия
        return [
            'class' => 'btn btn-sm btn-primary pull-left',
        ];
    }
    public function getDefaultRoute()
    {
       return route('equipment-models.activity', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}
