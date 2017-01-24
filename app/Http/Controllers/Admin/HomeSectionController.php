<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\HomeSection;
use App\Http\Controllers\Api\DataTables\HomeSectionDataTable;
use App\Http\Requests\Admin\HomeSectionRequest;

class HomeSectionController extends AdminController
{
    public function index(HomeSectionDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath());
    }

    public function store(HomeSectionRequest $request)
    {
        return $this->createFlashRedirect(HomeSection::class, $request);
    }

    public function show(HomeSection $homeSection)
    {
        return $this->viewPath("show", $homeSection);
    }

    public function edit(HomeSection $homeSection)
    {
        return $this->getForm($homeSection);
    }

    public function update(HomeSection $homeSection, HomeSectionRequest $request)
    {
        return $this->saveFlashRedirect($homeSection, $request);
    }

    public function destroy(HomeSection $homeSection)
    {
        return $this->destroyFlashRedirect($homeSection);
    }
}
