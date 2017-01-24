<?php

namespace App\Http\Controllers\Api\DataTables;

use App\Base\Controllers\DataTableController;
use App\HomeSection;

class HomeSectionDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = HomeSection::class;

    /**
     * Columns to show
     *
     * @var array
     */

    protected $columns = ['title'];

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
        $homeSections = HomeSection::whereLanguageId(session('current_lang')->id);
        return $this->applyScopes($homeSections);
    }
}
