<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use Illuminate\View\View;
use App\Http\Presenters\Movie\FindByIdPresenter;
use App\Http\Dto\Movie\FindByIdDto;
use Vinkla\Hashids\Facades\Hashids;

class EditController extends Controller
{
    public function __invoke(string $id, FindByIdPresenter $presenter, MovieService $service): View
    {
        $findByIdDto = new FindByIdDto([
            'id' => Hashids::decode($id)[0]
        ]);
        $movie = $service->getMovie($findByIdDto);

        return view('admin.movies.edit')->with('movie', $presenter->output($movie));
    }
}
