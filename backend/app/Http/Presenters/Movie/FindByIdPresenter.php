<?php

declare(strict_types=1);

namespace App\Http\Presenters\Movie;

use App\Entities\Movie\Movie;
use Vinkla\Hashids\Facades\Hashids;

class FindByIdPresenter
{
    public function output(Movie $movie)
    {
        return [
            'id' => Hashids::encode($movie->getId()),
            'title' => $movie->getTitle(),
            'imageUrl' => $movie->getImageUrl()
        ];
    }
}
