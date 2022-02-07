<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use App\Http\Presenters\Movie\IndexPresenter;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(IndexPresenter $presenter, MovieService $service): View
    {
        $movieList = $service->getAllMovies();

        return view('admin.movies.index')->with('movies', $presenter->output($movieList));
    }
}
