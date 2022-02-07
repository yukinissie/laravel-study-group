<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Requests\CreateMovieRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(CreateMovieRequest $request, MovieService $service): RedirectResponse
    {
        $createDto = new CreateDto([
            'title' => $request->title,
            'imageUrl' => $request->imageUrl
        ]);
        $service->createNewMovie($createDto);

        return redirect(route('admin.movies.index'));
    }
}
