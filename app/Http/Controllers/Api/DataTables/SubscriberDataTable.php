<?php

namespace App\Http\Controllers\Api\DataTables;

use App\Base\Controllers\DataTableController;
use App\Subscriber;

class SubscriberDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = Subscriber::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $columns = ['email'];
    protected $common_columns = ['created_at', 'updated_at'];
    protected $ops = false;

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $subscribers = Subscriber::query();
        return $this->applyScopes($subscribers);
    }
}
