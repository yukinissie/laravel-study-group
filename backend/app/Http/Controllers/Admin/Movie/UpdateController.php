<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Dto\Movie\UpdateDto;
use Vinkla\Hashids\Facades\Hashids;

class UpdateController extends Controller
{
    public function __invoke(UpdateMovieRequest $request, string $id, MovieService $service): RedirectResponse
    {
        $updateRequest = $request->validated();
        $updateDto = new UpdateDto([
            'id' => Hashids::decode($id)[0],
            'title' => $request->title,
            'imageUrl' => $request->imageUrl
        ]);
        $service->updateMovie($updateDto);

        return redirect(route('admin.movies.show', ['movie' => $id]));
    }
}
