<?php

declare(strict_types=1);

namespace App\Http\Presenters\Movie;

use App\Entities\Movie\Movie;

class FindByIdPresenter
{
    public function output(Movie $movie)
    {
        return [
            'id' => $movie->getId(),
            'title' => $movie->getTitle(),
            'imageUrl' => $movie->getImageUrl()
        ];
    }
}
