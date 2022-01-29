<?php

declare(strict_types=1);

namespace App\Http\Presenters\Movie;

class IndexPresenter
{
    public function output($movies)
    {
        return = array_map(function ($movie) {
            return [
                'id' => $movie->id,
                'title' => $movie->title,
                'imageUrl' => $movie->imageUrl
            ];
        });
    }
}
