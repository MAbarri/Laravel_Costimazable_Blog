<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Slide;
use App\Http\Controllers\Api\DataTables\SlideDataTable;
use App\Http\Requests\Admin\SlideRequest;


class SlideController extends AdminController
{

    private $imageColumn = "image";

    public function index(SlideDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath());
    }

    public function store(SlideRequest $request)
    {
        return $this->createFlashRedirect(Slide::class, $request, $this->imageColumn);
    }

    public function show(Slide $slide)
    {
        return $this->viewPath("show", $slide);
    }

    public function edit(Slide $slide)
    {
        return $this->getForm($slide);
    }

    public function update(Slide $slide, SlideRequest $request)
    {
        return $this->saveFlashRedirect($slide, $request, $this->imageColumn);
    }

    public function destroy(Slide $slide)
    {
        return $this->destroyFlashRedirect($slide);
    }
}
