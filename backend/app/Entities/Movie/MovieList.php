<?php

namespace App\Entities\Movie;

use App\Entities\Movie\Movie;

class MovieList
{
    protected array $movies;

    public function __construct(array $movies)
    {
        $this->movies = array_map(function ($movie) {
          return new Movie((object) $movie);
        }, $movies);
    }

    public function getList()
    {
        return $this->movies;
    }
}
