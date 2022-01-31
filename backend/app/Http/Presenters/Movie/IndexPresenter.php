<?php

declare(strict_types=1);

namespace App\Http\Presenters\Movie;

use App\Entities\Movie\MovieList;
use App\Entities\Movie\Movie;
use Vinkla\Hashids\Facades\Hashids;

class IndexPresenter
{
    public function output(MovieList $movieList)
    {
        return array_map(function (Movie $movie) {
            return [
                'id' => Hashids::encode($movie->getId()),
                'title' => $movie->getTitle(),
                'imageUrl' => $movie->getImageUrl()
            ];
        }, $movieList->getList());
    }
}
