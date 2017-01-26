<?php

namespace App\Http\Controllers\Application;

use App\Page;
use App\PopularSearch;
use Illuminate\Http\Request;
use App\Base\Controllers\ApplicationController;

class SearchController extends ApplicationController
{
    /**
     * Show the article.
     *
     * @param Article $article
     * @return Response
     */

    public function index(Request $request)
{

          $search = $request->input('search');

          $popularSearch = PopularSearch::where('value', '=', $search )->first();
          if ($popularSearch === null) {
            $popularSearch= new PopularSearch;
            $popularSearch->value = $request->input('search');
            $popularSearch->save();
          } else{
            $popularSearch->increment('numberOfSearches', 1);
          }

        $popularSeaches = PopularSearch::get();
        $popularSeaches = $popularSeaches->sortByDesc('numberOfSearches')->take(7);

        $pages = Page::where('language_id',session('current_lang')->id)
                    ->where('content', 'LIKE',  "%{$search}%")
                    ->orWhere('description', 'LIKE',  "%{$search}%")
                    ->orWhere('title', 'LIKE',  "%{$search}%")->get();
        return view('application.search.index', compact('pages','search','popularSeaches'));
    }
}
