<?php

namespace App\Http\Entities\Movie;

use App\Http\Entities\Movie\Movie;

class MovieList
{
    protected array $movies;

    public function __construct(array $movies)
    {
        $this->movies = array_map(function ($movie) {
          return new Movie((object) $movie);
        }, $movies);
    }
}
