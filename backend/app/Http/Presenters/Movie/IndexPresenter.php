<?php

declare(strict_types=1);

namespace App\Http\Presenters\Movie;

use App\Entities\Movie\MovieList;
use App\Entities\Movie\Movie;

class IndexPresenter
{
    public function output(MovieList $movieList)
    {
        return array_map(function (Movie $movie) {
            return [
                'id' => $movie->getId(),
                'title' => $movie->getTitle(),
                'imageUrl' => $movie->getImageUrl()
            ];
        }, $movieList->getList());
    }
}
