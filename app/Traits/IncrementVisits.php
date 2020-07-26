<?php


namespace App\Traits;


trait IncrementVisits
{
    public function incrementVisits($model)
    {
        $model->visits += 1;
        $model->save();
    }
}
