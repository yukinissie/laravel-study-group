<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use Illuminate\Http\RedirectResponse;
use App\Http\Dto\Movie\FindByIdDto;
use Vinkla\Hashids\Facades\Hashids;

class DestroyController extends Controller
{
    public function __invoke(string $id, MovieService $service): RedirectResponse
    {
        $findByIdDto = new FindByIdDto([
            'id' => Hashids::decode($id)[0]
        ]);
        $service->deleteMovie($findByIdDto);

        return redirect(route('admin.movies.index'));
    }
}