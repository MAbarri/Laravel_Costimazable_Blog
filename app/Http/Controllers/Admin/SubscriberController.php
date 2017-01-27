<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Api\DataTables\SubscriberDataTable;
use App\Subscriber;

class SubscriberController extends AdminController
{
    /**
     * Display a listing of the articles.
     *
     * @param ArticleDataTable $dataTable
     * @return Response
     */
    public function index(SubscriberDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath());
    }

}
