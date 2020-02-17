<?php
/**************************************************************************
 * Copyright (C) iFeras93, Inc - All Rights Reserved
 *
 *
 * @file        ColumnChanges.php
 * @author      Firas
 * @project     HistoriableModel
 * @date        2/16/2020
 */

namespace Iferas93\HistoriableModel\Traits\History;

class ColumnChanges
{
    public $column;
    public $from;
    public $to;

    public function __construct($col, $from_value, $to_value)
    {
        $this->column = $col;
        $this->from = $from_value;
        $this->to = $to_value;
    }
}
