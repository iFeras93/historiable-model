<?php
/**************************************************************************
 * Copyright (C) iFeras93, Inc - All Rights Reserved
 *
 *
 * @file        BeHistroiable.php
 * @author      Firas
 * @project     HistoriableModel
 * @date        2/16/2020
 */

namespace Iferas93\HistoriableModel\Traits\History;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

trait Histroiable
{
    public static function bootHistroiable()
    {
        static::updated(function (Model $model) {
            $columns = $model->getChangedColumns($model);
            collect($columns)->each(function ($column) use ($model) {
                $model->saveChanges($column);
            });
        });
    }

    private function getChangedColumns(Model $model)
    {
        $original = $model->getOriginal();

        return collect(Arr::except($model->getChanges(), $this->ignoredColumns()))->map(function ($change, $column) use ($original) {
            return new ColumnChanges($column, Arr::get($original, $column), $change);
        });
    }

    protected function ignoredColumns()
    {
        return [
            'updated_at',
        ];
    }

    private function saveChanges(ColumnChanges $column)
    {
        $this->history()->create([
            'changed_column' => $column->column,
            'value_from' => $column->from,
            'value_to' => $column->to,
        ]);
    }

    public function history()
    {
        return $this->morphMany(config('historiable.model'), 'Historiable');
    }
}
