<?php

namespace Iferas93\HistoriableModel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iferas93\HistoriableModel\Skeleton\SkeletonClass
 */
class HistoriableModelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'historiable-model';
    }
}
