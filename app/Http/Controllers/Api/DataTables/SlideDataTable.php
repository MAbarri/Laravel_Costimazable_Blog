<?php

namespace App\Http\Controllers\Api\DataTables;

use App\Base\Controllers\DataTableController;
use App\Slide;

class SlideDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = Slide::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $image_columns = ['image'];

    protected $columns = ['title','description'];

    /**
     * Common columns for translation
     *
     * @var array
     */
    protected $common_columns = ['created_at', 'updated_at'];

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $slides = Slide::whereLanguageId(session('current_lang')->id);
        return $this->applyScopes($slides);
    }
}
