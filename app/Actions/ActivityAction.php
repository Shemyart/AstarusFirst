<?php

namespace App\Actions;

class ActivityAction extends \TCG\Voyager\Actions\AbstractAction
{

    public function getTitle()
    {
        return $this->data->{'activity'}=="1"?'Активен':'Неактивен';
    }

    public function getIcon()
    {
        return $this->data->{'activity'}=="1"?'voyager-x':'voyager-external';
    }

    public function shouldActionDisplayOnDataType()
    {
        // Показывать или скрыть кнопку действия. Отображается только для модели Equipment
        return $this->dataType->slug == 'equipment_models';
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
