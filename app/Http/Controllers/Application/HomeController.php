<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;

class HomeController extends ApplicationController
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        $slides = session('current_lang')->slides()->orderBy('created_at')->paginate(5);
        $homeSections = session('current_lang')->homeSections()->orderBy('created_at')->paginate(5);
        return view('application.home.index', compact('slides','homeSections'));
    }
}
